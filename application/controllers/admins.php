<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//dont touch my controller
class Admins extends CI_Controller {
	public function index(){
        if($this->session->userdata('logged_in')==true){
            $this->dashboard();
        }
        else {
            $this->load->view('admin_login');
        }
	}
    public function login(){
        if($this->input->post('user_name')=='admin' && $this->input->post('password')=='giraffe'){
            $this->session->set_userdata('logged_in', TRUE);
            redirect("/admins/dashboard");
        }
        else {
            $this->index();
        }
    }
    public function dashboard(){
        if($this->session->userdata('logged_in')==true){
			$orders = $this->admin->get_all_orders();
            $this->load->view('dashboard', ['orders' => $orders]);
        }
        else {
            $this->load->view('admin_login');
        }
    }
    public function products(){
        if($this->session->userdata('logged_in')==true){
            $products = $this->admin->get_all_products();
			$categories = $this->admin->get_all_categories();
            $this->load->view('products', ['products' => $products, 'categories' => $categories]);
        }
        else {
            $this->load->view('admin_login');
        } 
    }
    public function add_product(){
        if($this->session->userdata('logged_in')==true){
			$categories = $this->admin->get_all_categories();
            $this->load->view('add_product', ['categories' => $categories]);
        }
        else {
            $this->load->view('admin_login');
        } 
    }
	public function create(){
		$description = $this->input->post('description');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$category = $this->input->post('category');
		$pic = $this->input->post('picture_link');
		$this->admin->create_product($description, $name, $price, $category, $pic);
		redirect("/admins/products");
	}
	public function edit($id){
		$product = $this->admin->get_product_by_id($id);
		$categories = $this->admin->get_all_categories();
		$this->load->view('edit_product', ['product' => $product, 'categories' => $categories]);
	}
	public function update($id){
		$description = $this->input->post('description');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$category = $this->input->post('category');
		$pic = $this->input->post('picture_link');
		$this->admin->update_product($description, $name, $price, $id, $category, $pic);
		redirect("/admins/products");
	}
	public function preview($id){
		if($this->session->userdata('logged_in')==true){
			if($this->input->post('name')&&$this->input->post('description')&&$this->input->post('price')){
				$description = $this->input->post('description');
				$name = $this->input->post('name');
				$price = $this->input->post('price');
				$category = $this->input->post('category');
				$pic = $this->input->post('picture_link');
				$this->admin->update_product($description, $name, $price, $id, $category, $pic);
				$product = $this->admin->get_product_by_id($id);
				$categories = $this->admin->get_all_categories();
				$this->load->view('preview', ['product' => $product, 'categories' => $categories]);
			}
			else {
				$product = $this->admin->get_product_by_id($id);
				$categories = $this->admin->get_all_categories();
				$this->load->view('preview', ['product' => $product, 'categories' => $categories]);
			}
		}
		else {
			$this->load->view('admin_login');
		}
	}
	public function delete($id){
		$this->admin->delete($id);
		redirect("/admins/products");
	}
	public function logoff(){
		$this->session->sess_destroy();
		redirect("/admins/");
	}
	public function create_preview(){
		$description = $this->input->post('description');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$category = $this->input->post('category');
		$pic = $this->input->post('picture_link');
		$id = $this->admin->create_product($description, $name, $price, $category, $pic);
		$product = $this->admin->get_product_by_id($id);
		$this->load->view('preview', ['product' => $product]);
	}
	public function status($id){
		$this->admin->update_status($id, $this->input->post('status'));
		redirect("/admins/");
	}
	public function view_order($id){
		$order = $this->admin->get_order_by_id($id);
		$products = $this->admin->get_ordered_products($id);
		$this->load->view('view_order', ['products' => $products, 'order' => $order]);
	}
}
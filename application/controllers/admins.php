<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
            $this->load->view('dashboard');
        }
        else {
            $this->load->view('admin_login');
        }
    }
    public function products(){
        if($this->session->userdata('logged_in')==true){
            $products = $this->admin->get_all_products();
            $this->load->view('products', ['products' => $products]);
        }
        else {
            $this->load->view('admin_login');
        } 
    }
}
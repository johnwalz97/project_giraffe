<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {

	public function index(){
		$products = $this->main->getAllProducts();
		$this->load->view('storefront', array('products' => $products));
	}

	public function oneProduct($id){
		$oneProduct = $this->main->getOneProduct($id);
		$products = $this->main->getProductsInCategoryLimit($oneProduct['category'], $id);
		$this->load->view('single_product', array('oneProduct' => $oneProduct, 'products' => $products));
	}

	public function productsInCategory($id){
		$category = $this->main->getOneCategory($id);
		$products = $this->main->getProductsInCategory($id);
		$this->load->view('storefront_categorized', ['products' => $products, 'category' => $category]);
	}

	public function view_cart(){
		$this->load->view('cart');
	}
	
	public function checkout(){
		if(!empty($this->session->userdata('user'))){
			$address = $this->main->get_addresses();
			$this->load->view('checkout', ['address' => $address]);
		}
		else {
			$address = '';
			$this->load->view('checkout', ['address' => $address]);
		}
	}

}

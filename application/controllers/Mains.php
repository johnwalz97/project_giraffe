<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {


	public function index(){
		$products = $this->main->getAllProducts();
		$this->load->view('storefront');
	}

	public function oneProduct($id){
		$product = $this->main->getOneProduct($id);
		$this->load->view('single_product');
	}

	public function productsInCategory($id){
		$category = $this->main->getOneCategory($id);
		$products = $this->main->getProductsInCategory($id);
		$this->load->view('storefront_categorized', $products, $category);
	}

	public function view_cart(){
		$this->load->view('cart');
	}




}

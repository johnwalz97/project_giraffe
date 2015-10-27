<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {


	public function index(){
		$products = $this->main->getAllProducts();
		$this->load->view('storefront');
	}

	public function view_cart(){
		$this->load->view('cart_view');
	}


}

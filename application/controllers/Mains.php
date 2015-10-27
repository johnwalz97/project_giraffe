<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {


	public function index()
	{
		$this->load->view('main_view');
	}

	public function view_cart()
	{
		$this->load->view('cart_view');
	}
}

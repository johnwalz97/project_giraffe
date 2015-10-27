<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {


<<<<<<< HEAD
	public function index(){
		$this->load->view('');
		var_dump($this->db->query('SELECT * FROM products')->result_array());
=======
	public function index()
	{
		$this->load->view('main_view');
	}

	public function view_cart()
	{
		$this->load->view('cart_view');
>>>>>>> 6c61d64e62a23cbdb319953c02f5945370d37d6c
	}
}

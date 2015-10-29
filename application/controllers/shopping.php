<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopping extends CI_Controller {

	public function index(){
		$this->load->helper('form');
		$this->load->view('cart');
	}

	public function update(){
		$this->cart->update($_POST);
		redirect(base_url().'shopping');
	}

	public function buy($id){
		$oneProduct = $this->main->getOneProduct($id);
		$data = array(
		               'id'      => $oneProduct['id'],
		               'qty'     => 1,
		               'price'   => $oneProduct['price'],
		               'name'    => $oneProduct['name'],
		            );

		$this->cart->insert($data);
		$this->load->view('cart');
	}

	public function delete($rowid){
		$this->load->library('cart');
		$this->cart->update(array('rowid' => $rowid, 'qty' => 0));
		$this->load->view('cart');
	}
	
	public function checkout(){
		$products = [];
		foreach ($this->cart->contents() as $item) {
			$products[$item['id']] = $item['qty'];
		};
		var_dump($products);
		die;
	}
}
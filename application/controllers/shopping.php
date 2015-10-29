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
		$bill_id = $this->main->create_ship_address($this->input->post('first_name'), $this->input->post('last_name'), $this->input->post('street'), $this->input->post('city'), $this->input->post('state'), $this->input->post('zipcode'));
		$ship_id = $this->main->create_bill_address($this->input->post('bill_first_name'), $this->input->post('bill_last_name'), $this->input->post('bill_street'), $this->input->post('bill_city'), $this->input->post('bill_state'), $this->input->post('bill_zipcode'), $this->input->post('card_number'), $this->input->post('name'), $this->input->post('cvc'), $this->input->post('expiration'));
		$this->main->place_order($bill_id, $ship_id, $products);
	}
}
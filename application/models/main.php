<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model {
	public function login_user($email, $password){
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values = [$email, $password];
		return $this->db->query($query, $values)->row_array();
	}

	public function register_user($email, $first_name, $last_name, $password) {
		$query = "INSERT INTO users (email, first_name, last_name, password) VALUES (?,?,?,?)";
		$values = [$email, $first_name, $last_name, $password];
		$this->db->query($query, $values);
		$id = $this->db->insert_id();
		return $this->db->query("SELECT * FROM users WHERE id = ?", $id)->row_array();
	}
	public function getAllProducts(){
		$query = "SELECT * FROM products";
		$products = $this->db->query($query)->result_array();
		return $products;
	}

	public function getOneProduct($id){
		$query = "SELECT * FROM products WHERE id = ?";
		$values = array($id);
		$oneProduct = $this->db->query($query, $values)->row_array();
		return $oneProduct;
	}

	public function getOneCategory($id){
		$query = "SELECT name FROM categories WHERE id = ?";
		return $this->db->query($query, $id)->row_array();
	}

	public function getProductsInCategory($id){
		$query = "SELECT * FROM products WHERE category = ?";
		return $this->db->query($query, $id)->result_array();
	}

	public function getProductsInCategoryLimit($category, $id){
		$query = "SELECT id, picture_link FROM products WHERE category = ? AND id != ? LIMIT 6";
		$values = [$category, $id];
		$products = $this->db->query($query, $values)->result_array();
		return $products;
	}
	public function get_addresses(){
		$query = "SELECT ship_addresses.street, ship_addresses.city, ship_addresses.state, ship_addresses.zip, ship_addresses.first_name, ship_addresses.last_name, bill_addresses.street as bill_street, bill_addresses.city as bill_city, bill_addresses.state as bill_state, bill_addresses.zip as bill_zip, bill_addresses.first_name as bill_first_name, bill_addresses.last_name as bill_last_name, bill_addresses.card_number, bill_addresses.name, bill_addresses.cvc, bill_addresses.expiration FROM ship_addresses LEFT JOIN bill_addresses ON bill_addresses.user_id = ship_addresses.user_id WHERE ship_addresses.user_id = ?";
		return $this->db->query($query, $this->session->userdata('user')['id'])->row_array();
	}
	public function create_ship_address($first_name, $last_name, $street, $city, $state, $zip){
		$query = "INSERT INTO ship_addresses (first_name, last_name, street, city, state, zip, user_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
		if(!empty($this->session->userdata('user'))){
			$id = $this->session->userdata('user')['id'];
			//if(!empty($this->get_addresses())){
				//$query = 'UPDATE ship_addresses SET first_name=?, last_name=?, street=?, city=?, state=?, zip=? WHERE user_id = ?';
			//}
		}
		else {
			$id = 0;
		}
		$values =  array($first_name, $last_name, $street, $city, $state, $zip, $id);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function create_bill_address($first_name, $last_name, $street, $city, $state, $zip, $card_number, $name, $cvc, $expiration){
		$query = "INSERT INTO bill_addresses (first_name, last_name, street, city, state, zip, card_number, name, cvc, expiration, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		if(!empty($this->session->userdata('user'))){
			$id = $this->session->userdata('user')['id'];
			//if(!empty($this->get_addresses())){
				//$query = 'UPDATE bill_addresses SET first_name=?, last_name=?, street=?, city=?, state=?, zip=?, card_number=?, name=?, cvc=?, expiration=? WHERE user_id = ?';
			//}
		}
		else {
			$id = 0;
		}
		$values =  array($first_name, $last_name, $street, $city, $state, $zip, $card_number, $name, $cvc, $expiration, $id);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function place_order($bill, $ship, $products){
		$query = "INSERT INTO orders (created_at, updated_at, ship_address_id, bill_address, status) VALUES (NOW(), NOW(), ?, ?, 1)";
		$values = [$ship, $bill];
		$this->db->query($query, $values);
		$order_id = $this->db->insert_id();
		foreach ($products as $product => $quantity){
			$query = "INSERT INTO products_ordered (product_id, order_id, product_quantity) VALUES (?, ?, ?)";
			$values = [$product, $order_id ,$quantity];
			$this->db->query($query, $values);
			$this->db->query('UPDATE products SET qty_ordered=qty_ordered+? WHERE id = ?', array($quantity, $product));
		}
	}
}

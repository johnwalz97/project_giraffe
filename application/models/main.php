<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model {

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
	public function create_ship_address($first_name, $last_name, $street, $city, $state, $zip){
		$query = "INSERT INTO ship_addresses (first_name, last_name, street, city, state, zip) VALUES (?, ?, ?, ?, ?, ?)";
		$values =  array($first_name, $last_name, $street, $city, $state, $zip);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function create_bill_address($first_name, $last_name, $street, $city, $state, $zip, $card_number, $name, $cvc, $expiration){
		$query = "INSERT INTO bill_addresses (first_name, last_name, street, city, state, zip, card_number, name, cvc, expiration) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$values =  array($first_name, $last_name, $street, $city, $state, $zip, $card_number, $name, $cvc, $expiration);
		$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function place_order($bill, $ship, $products){
		$query = "INSERT INTO orders (created_at, updated_at, ship_address_id, bill_address, status) VALUES (NOW(), NOW(), ?, ?, 1)";
		$values = [$bill, $ship];
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

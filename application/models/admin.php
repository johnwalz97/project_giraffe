<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	public function get_all_products(){
		$query = "SELECT * FROM products";
		return ($this->db->query($query)->result_array());
	}
	public function get_all_orders(){
		$query = "SELECT * FROM orders";
		return ($this->db->query($query)->result_array());
	}
	public function create_product($description, $name, $price){
		$query = "INSERT INTO products (description, name, price, created_at, updated_at, views, qty_ordered) VALUES (?, ?, ?, NOW(), NOW(), 0, 0)";
		$values = [$description, $name, $price];
		$this->db->query($query, $values);
		return($this->db->insert_id());
	}
	public function get_product_by_id($id){
		$query = "SELECT * FROM products WHERE id = ?";
		return ($this->db->query($query, $id)->row_array());
	}
	public function update_product($description, $name, $price, $id){
		$query = "UPDATE products SET description=?, name=?, price=?, updated_at=NOW() WHERE id=?";
		$values = [$description, $name, $price, $id];
		$this->db->query($query, $values);
	}
	public function delete($id){
		$query = "DELETE FROM products WHERE id = ?";
		$this->db->query($query, $id);
	}
}

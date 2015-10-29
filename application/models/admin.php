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
	public function create_product($description, $name, $price, $category, $pic){
		$query = "INSERT INTO products (description, name, price, created_at, updated_at, views, qty_ordered, picture_link, category) VALUES (?, ?, ?, NOW(), NOW(), 0, 0, ?, ?)";
		$values = [$description, $name, $price, $pic, $category];
		$this->db->query($query, $values);
		return($this->db->insert_id());
	}
	public function get_product_by_id($id){
		$query = "SELECT products.name, products.id, products.description, products.price, products.picture_link, categories.name as category_name FROM products LEFT JOIN categories ON products.category = categories.id WHERE products.id = ?";
		return ($this->db->query($query, $id)->row_array());
	}
	public function update_product($description, $name, $price, $id, $category, $pic){
		$query = "UPDATE products SET description=?, name=?, price=?, category=?, picture_link=?, updated_at=NOW() WHERE id=?";
		$values = [$description, $name, $price, $category, $pic, $id];
		$this->db->query($query, $values);
	}
	public function delete($id){
		$query = "DELETE FROM products WHERE id = ?";
		$this->db->query($query, $id);
	}
	public function get_all_categories(){
		$query ="SELECT * FROM categories";
		return $this->db->query($query)->result_array();
	}
}

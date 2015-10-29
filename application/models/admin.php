<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	public function get_all_products(){
		$query = "SELECT * FROM products";
		return ($this->db->query($query)->result_array());
	}
	public function get_all_orders(){
		$query = "SELECT orders.id, bill_addresses.first_name, orders.created_at, orders.status, bill_addresses.street, bill_addresses.city, bill_addresses.state, bill_addresses.zip FROM orders LEFT JOIN bill_addresses ON orders.bill_address = bill_addresses.id";
		return ($this->db->query($query)->result_array());
	}
	public function get_ordered_products($id){
		$query = "SELECT products_ordered.product_id, products.name, products_ordered.product_quantity, products.price FROM products_ordered LEFT JOIN products ON products_ordered.product_id = products.id WHERE order_id = ?";
		return $this->db->query($query, $id)->result_array();
	}
	public function get_order_by_id($id){
		$query = "SELECT orders.id, orders.status, ship_addresses.first_name as ship_first_name, ship_addresses.last_name  as ship_last_name, ship_addresses.street as ship_street, ship_addresses.city as ship_city, ship_addresses.state as ship_state, ship_addresses.zip as ship_zip, bill_addresses.first_name, bill_addresses.last_name, bill_addresses.street, bill_addresses.city, bill_addresses.state, bill_addresses.zip FROM orders LEFT JOIN ship_addresses ON ship_addresses.id = orders.ship_address_id LEFT JOIN bill_addresses ON bill_addresses.id = orders.bill_address WHERE orders.id=?";
		return $this->db->query($query, $id)->row_array();
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
	public function update_status($id, $status){
		$query = "UPDATE orders SET status = ? WHERE id = ?";
		$values = [$status, $id];
		$this->db->query($query, $values);
	}
}

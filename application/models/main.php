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
}

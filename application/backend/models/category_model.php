<?php
class category_model  extends CI_Model{
	
	function save(){
		
		$this->category_name  = $_POST['category_name'];
		$this->db->insert('category', $this);
	}
	
	function getCategory(){
	
		$query = $this->db->query("select * from category");
		return $query->result();
	}
	
}
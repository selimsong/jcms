<?php

class user_model  extends CI_Model{
	

	function save(){
		$this->user_name = $_POST['user_name'];
		$this->password  = md5($_POST['user_password']);
		$this->email     = $_POST['user_email'];
		$this->db->insert('users', $this);
	}
	
	function getUsers(){
		$query = $this->db->query("select * from users");
		return $query->result();
	}
	
	
}
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
	
	function editUser($id){
		$query = $this->db->query("select id, user_name, email from users where id ='$id'  LIMIT 1 ");
		return $query->row();
	}
	
	function update($id){
		
		$id = $_POST['post_id'];
		$user_name =  $_POST['user_name'];
		$email =      $_POST['user_email'];
		$password =   $_POST['user_password'];
		$_set = "set user_name='$user_name', email='$email'";
		if (!empty($password)) {
			$_set.= " , password = '".md5($password)."' ";
		}
		$sql = "update users  $_set  where id ='$id'  LIMIT 1 ";
		$query = $this->db->query($sql);
	}
	
	
}
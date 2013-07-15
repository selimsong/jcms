<?php
class role_model  extends CI_Model{
	
	function getRoles(){
	
		$query = $this->db->query("select * from roles");
		return $query->result();
	}
	
	
	
	
}
<?php
class role_model  extends CI_Model{
	
	function getRoles(){
	
		$query = $this->db->query("select * from roles");
		return $query->result();
	}
	
	function save(){

		 $modle_permission = $this->config->item('model_permission');
		 $permission = array();
		 foreach ($_POST['set'] as $key => $value){
		 	if(1 == $value){
		 		$permission[] = array_search($key, $modle_permission);
		 	}
		 }

		 $this->role_name          = $_POST['user_name'];
		 $this->role_permission    = implode(',', $permission);
		$this->db->insert('roles', $this);
	}
	
	
}
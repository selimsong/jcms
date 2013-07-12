<?php
class post_model  extends CI_Model{
	
	
	function save(){
		$this->title   = $_POST['post_title'];
		$this->content = $_POST['post_content'];
		$this->date    = date("y-m-d H:i:s" ,time()); 
		$this->db->insert('posts', $this);
	}		
	
	
}
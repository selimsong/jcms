<?php
class setting_model  extends CI_Model{
		
	function save(){
		$this->title     = $_POST['post_title'];
		$this->content   = $_POST['post_content'];
		$this->cate_id   = $_POST['category'];
		$this->date      = date("y-m-d H:i:s" ,time());
		$this->user_name = $this->session->userdata('UserName');
		$this->db->insert('posts', $this);
	}
	
	
	
}
<?php
class setting_model  extends CI_Model{
		
	function save(){
		$query = $this->db->query("select id from setting limit 0, 1");
		$site_title = $_POST['site_title'];
		if ($query->num_rows() > 0){
			$row = $query->row();
			$id = $row->id;
			$query = $this->db->query("update setting set title='$title' where id ='$id'  LIMIT 1 ");
		}else{
			$this->site_title   = $site_title;
			$this->db->insert('setting', $this);
		}
		
	}
	

}
<?php
class post_model  extends CI_Model{
	
	
	function save(){
		$this->title   = $_POST['post_title'];
		$this->content = $_POST['post_content'];
		$this->date    = date("y-m-d H:i:s" ,time()); 
		$this->db->insert('posts', $this);
	}

	function getPosts(){
		
		$query = $this->db->query("select * from posts");
        return $query->result();
	}
	
	function getPostsCount(){
		return $this->db->count_all("posts");
	}
	
	function editPost($id){
		$query = $this->db->query("select id, title, content from posts where id ='$id'  LIMIT 1 ");
		return $query->row();
	}
	
	function delete(){
		$_in = implode(',', $_POST['delete']);
		$query = $this->db->query("delete from posts where id in (" . $_in . ")  ");
	}

	function update(){

		$title =  $_POST['post_title'];
		$content = $_POST['post_content'];
		$id = $_POST['post_id'];

		$query = $this->db->query("update posts set title='$title', content='$content' where id ='$id'  LIMIT 1 ");
	}
	
}
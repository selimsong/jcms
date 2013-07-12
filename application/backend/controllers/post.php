<?php
class Post extends CI_Controller {

	public function  Post(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{

		$this->load->view('post_new');
	}
	
	public function add(){
		
		$this->load->view('post_add');
	}
	
	public function save(){
		
		print_r($_POST);
	}
	
    
	public function tinymce(){
		$this->load->view('tinymce');
		
	}


}
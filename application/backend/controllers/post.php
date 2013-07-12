<?php
class Post extends CI_Controller {

	public function  Post(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('post');
	}
	
	public function add(){
		
		$this->load->view('post_add');
	}
	
	public function save(){
		
		$this->load->database();
		$this->load->model('post_model', 'post');
		$this->post->save();
		redirect('admin/home');
	}
	
    
	public function tinymce(){
		$this->load->view('tinymce');
		
	}


}
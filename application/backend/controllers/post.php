<?php
class Post extends CI_Controller {

	public function  Post(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{ 
		$data['curNav'] = 'list_post';
		$this->load->database();
		$this->load->model('post_model', 'post');
		$data['post'] = $this->post->getPosts();
		$this->load->view('header');
		$this->load->view('post', $data);
	}
	
	public function add(){
		$data['curNav'] = 'add_post';
		$this->load->view('header');
		$this->load->view('post_add', $data);
	}
	
	public function save(){
		
		$this->load->database();
		$this->load->model('post_model', 'post');
		$this->post->save();
		redirect('admin/post');
	}
	
    
	public function tinymce(){
		$this->load->view('tinymce');
		
	}


}
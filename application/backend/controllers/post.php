<?php
class Post extends CI_Controller {

	public function  Post(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}

	public function index()
	{ 
		$this->lang->load(MAIN_LANG, $this->config->item('chinese'));
		 $data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('post_model', 'post');
		$data['post'] = $this->post->getPosts();
		$this->load->view('header');
		$this->load->view('post', $data);
	}
	
	public function add(){
		 $data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->view('header');
		$this->load->view('post_add', $data);
	}
	
	public function edit($id){
		
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('post_model', 'post');
		$data['post'] = $this->post->editPost($id);
		$this->load->view('header');
		$this->load->view('post_edit', $data);
	}
	
	public function delete(){
		$this->load->database();
		$this->load->model('post_model', 'post');
		$this->post->delete();
		redirect('admin/post');
	
	}
	
	public function update(){

		$this->load->database();
		$this->load->model('post_model', 'post');
		$this->post->update();
		redirect('admin/post');
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
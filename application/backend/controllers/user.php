<?php
class User extends CI_Controller {
	
	public function  User(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	
	public function add(){
		$data['curNav'] = 'add_post';
		$this->load->view('header');
		$this->load->view('user_add', $data);
	}
	
	
	public function save(){
		
		$this->load->database();
		$this->load->model('user_model', 'user');
		$this->user->save();
		//redirect('admin/post');
		
	}
	
	
	
	
	
	
	
}
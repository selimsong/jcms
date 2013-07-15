<?php
class User extends CI_Controller {
	
	public function  User(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{
		
		
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('user_model', 'user');
		$data['user'] = $this->user->getUsers();
		$this->load->view('header');
		$this->load->view('user', $data);
	}
	
	public function add(){
	
	    $data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->view('header');
		$this->load->view('user_add', $data);
	}
	
	public function edit($id){
		
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('user_model', 'user');
		$data['user'] = $this->user->editUser($id);
		$this->load->view('header');
		$this->load->view('user_edit', $data);
	}
	
	public function save(){
		
		$this->load->database();
		$this->load->model('user_model', 'user');
		$this->user->save();
		redirect('admin/user');
	}
	
	public function update(){

		$this->load->database();
		$this->load->model('user_model', 'user');
		$this->user->update();
		redirect('admin/user');
	}
	
	

	
}
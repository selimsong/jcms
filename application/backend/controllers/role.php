<?php
class Role extends CI_Controller {

	public function  Role(){
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
		$this->load->view('role', $data);
	}
	
	
	
}
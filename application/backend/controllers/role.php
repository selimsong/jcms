<?php
class Role extends CI_Controller {

	public function  Role(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}
	
	
	public function index()
	{
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('role_model', 'role');
		$data['role'] = $this->role->getRoles();
		$this->load->view('header');
		$this->load->view('role', $data);
	}
	
	public function add(){
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->view('header');
		$this->load->view('role_add', $data);
	}
	
	public function save(){
		
		$this->load->database();
		$this->load->model('role_model', 'role');
		$this->role->save();
		redirect('admin/role');
	}
	
	
	
}
<?php
class Login extends CI_Controller {
	
	public function  Login(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{    

		 $this->load->view('header');
		 $this->load->view('login');
	}
	
	public function validate(){

		redirect('admin/home');
	}
	
	
}
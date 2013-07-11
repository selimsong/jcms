<?php
class Home extends CI_Controller {
	
	public function  Home(){
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function index()
	{    

		 $this->load->view('header');
		 $this->load->view('home');
	}

	
	
}
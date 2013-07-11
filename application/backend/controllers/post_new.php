<?php
class Post_new extends CI_Controller {

	public function  Post_new(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{

		$this->load->view('post_new');
	}



}
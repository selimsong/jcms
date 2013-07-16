<?php
class Category extends CI_Controller {
	
	public function  Category(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}
	
	public function index()
	{
	
		
		$this->load->view('category');
	}
	
	public function add(){
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->view('header');
		$this->load->view('category_add', $data);
	}
	
	
	
	
	
	
}
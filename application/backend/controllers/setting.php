<?php
class Setting extends MY_Controller {
	
	public function  Setting(){
		parent::__construct();
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}
	
	public function index(){
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->view('header');
		$this->load->view('setting', $data);
	}
	

	
}
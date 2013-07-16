<?php
class Login extends CI_Controller {
	
	public function  Login(){
		parent::__construct();
	}
	
	public function index()
	{    
		 $loginId = $this->session->userdata('UserName');
		 if(!empty($loginId)){
		 	redirect('admin/home');
		 }
         $data['error'] = $this->session->userdata('error');
         $this->session->unset_userdata('error');
		 $this->load->view('header');
		 $this->load->view('login', $data);
	}
	
	public function validate(){

		$this->load->database();
		$error_msg = null;
		$log  = addslashes(trim($_POST['log']));
		$pwd  = addslashes(trim($_POST['pwd']));
		if(!empty($log)){
			$query = $this->db->query("select id, user_name, password from users where user_name ='$log'  LIMIT 1 ");
			if($row = $query->row()){
				if ($row->password == md5($pwd)) {
					 $this->session->set_userdata(array('UserName' => $log));
					 redirect('admin/home');
				}else{
					$error_msg = 'password not correct';
				}
				
			}else{
				$error_msg = 'login id not correct !';
			}
			
		}else{
			$error_msg = 'pls input your login id !';
		}
		$this->session->set_userdata(array('error' => $error_msg));
		redirect('admin/login');
	}
	
	
}
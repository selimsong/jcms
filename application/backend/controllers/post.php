<?php
class Post extends MY_Controller {

	public function  Post(){
		parent::__construct();
		$this->load->library('pagination');
		$this->lang->load(MAIN_LANG, $this->session->userdata('default_lang'));
	}

	public function index()
	{ 
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('post_model', 'post');
		$config['base_url'] = base_url().'admin/post/index';
		$config['per_page'] = PER_PAGE;
		$config['total_rows'] = $this->post->getPostsCount();
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['post'] = $this->post->getPosts($config['per_page'], $page);
		$this->load->view('header');
		$this->load->view('post', $data);
	}
	
	
	public function add(){
		 $data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->view('header');
		$this->load->view('post_add', $data);
	}
	
	public function edit($id){
		
		$data['curNav'] = $this->uri->segment(1).$this->uri->segment(2);
		$this->load->database();
		$this->load->model('post_model', 'post');
		$data['post'] = $this->post->editPost($id);
		$this->load->view('header');
		$this->load->view('post_edit', $data);
	}
	
	public function delete(){
		$this->load->database();
		$this->load->model('post_model', 'post');
		$this->post->delete();
		redirect('admin/post');
	
	}
	
	public function update(){

		$this->load->database();
		$this->load->model('post_model', 'post');
		$this->post->update();
		redirect('admin/post');
	}
	
	public function save(){
		
		$uploadfile =  '../upload/'.basename($_FILES['pictures']['name']);
		if (move_uploaded_file($_FILES['pictures']['tmp_name'], $uploadfile)) {
			echo "File is valid, and was successfully uploaded.\n";
		} else {
			echo "Possible file upload attack!\n";
		}
		
		
		$this->load->database();
		$this->load->model('post_model', 'post');
		$this->post->save();
		redirect('admin/post');
	}
	
	public function upload(){
		
		$this->load->view('upload');
	}
	
	public function uploadsave(){
		$uploadfile =  '../upload/'.basename($_FILES['pictures']['name']);
		if (move_uploaded_file($_FILES['pictures']['tmp_name'], $uploadfile)) {
			echo "File is valid, and was successfully uploaded.\n";
		} else {
			echo "Possible file upload attack!\n";
		}
	}
	
    
	public function tinymce(){
		$this->load->view('tinymce');
		
	}


}
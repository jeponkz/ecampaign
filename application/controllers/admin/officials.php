<?php

class Officials extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['title'] = 'Officials';
		$this->load->view('admin/officials/officials' , $data);
	}

	public function add(){
		$data['title'] = 'Add official';
		$this->load->view('admin/officials/add-official' , $data);
	}

	public function edit(){
		$data['title'] = 'Edit official';
		$this->load->view('admin/officials/edit-official' , $data);
	}
}
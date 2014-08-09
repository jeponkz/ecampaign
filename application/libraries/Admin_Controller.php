<?php

class Admin_Controller extends MY_Controller{
	
	public function __construct(){
		parent::__construct();

		$this->data['meta_title'] = 'Dashboard - eGovernance';
		$this->load->model('user_m');

		//Login check

		$exception_uris = array(
				'admin/user/login', 
				'admin/user/logout'
			);

		if(in_array(uri_string(), $exception_uris) == FALSE){
			if($this->user_m->loggedin() == FALSE){
				redirect('admin/user/login');
			}
		}
	}

}
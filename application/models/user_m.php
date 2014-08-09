<?php

class User_m extends MY_Model{

	protected $_table_name = 'eg_users';
	protected $_order_by = 'name';

	public $rules = array(
			'username' => array(
				'field' => 'username', 
				'label'=>'Username', 
				'rules' => 'trim|required|xss_clean'
				),
			'password' => array(
				'field' => 'password', 
				'label'=>'Password', 
				'rules' => 'trim|required'
				)
		);
	
	function construct(){
		parent::__construct();
	}

	public function login (){
		$user = $this->get_by(array(
			'email' => $this->input->post('email'),
			'password' => $this->hash($this->input->post('password')),
		), TRUE);
		
		if (count($user)) {
			// Log in user
			$data = array(
				'name' => $user->name,
				'email' => $user->email,
				'id' => $user->id,
				'role' => $user->role,
				'loggedin' => TRUE,
			);
			$this->session->set_userdata($data);
		}
	}

	public function logout (){
		$this->session->sess_destroy();
	}

	public function loggedin (){
		return (bool) $this->session->userdata('loggedin');
	}

	public function hash ($string){
		return hash('sha512', $string . config_item('encryption_key'));
	}
}
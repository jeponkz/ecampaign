<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
       $dashboard = 'admin/dashboard';
        $this->user_m->loggedin() == FALSE || redirect($dashboard);
    }

    public function edit($id){

    }

    public function delete($id){

    }

    public function login(){
        $dashboard = 'admin/dashboard';
        $this->user_m->loggedin() == FALSE || redirect($dashboard);

        $rules = $this->user_m->rules;
        $this->form_validation->set_rules($rules);
        $this->form_validation->set_error_delimiters('<div class="message error">', '</div>');
        
        if ($this->form_validation->run() == TRUE) {
            // We can login and redirect
            if ($this->user_m->login() == TRUE) {
                redirect($dashboard);
            }
            else {
                $this->session->set_flashdata('error', 'Incorrect Username or Password');
                redirect('admin/user/login');
            }
        }
        $this->load->view('admin/login.php');
    }

    public function logout(){
        $this->user_m->logout();
        redirect('admin/user/login');
    }}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
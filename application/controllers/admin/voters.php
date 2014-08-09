<?php

class Voters extends Admin_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('voters_m');
		$this->load->model('barangays_m');
	}

	public function index(){
		$data['title'] = 'Voters List';
		$data['all_voters'] = $this->voters_m->get();
		$this->load->view('admin/voters/voters-list', $data);
	}

	public function add(){
		$data['title'] = 'Add Voter';
		$data['barangays'] = $this->barangays_m->get();
		$this->load->view('admin/voters/add-voter', $data);
	}

	public function edit(){
		$data['title'] = 'Edit Voter';
		$id = $_GET['id'];
		$data['barangays'] = $this->barangays_m->get();
		$data['voters'] = $this->voters_m->get($id);
		$this->load->view('admin/voters/edit-voter', $data);
	}

	public function update(){
		$config['upload_path'] = './uploads/voters/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){
			// $error = array('error' => $this->upload->display_errors());
			$tmp = $this->upload->data();
			$image_path = base_url().'uploads/voters/';
			$data = array(
					'surname' 		=> $_POST['surname'],
					'first_name' 	=> $_POST['first_name'],
					'middle_name' 	=> $_POST['middle_name'],
					'extension' 	=> $_POST['extension'],
					'birth_date' 	=> $_POST['birth_date'],
					'gender' 		=> $_POST['gender'],
					'age' 			=> $_POST['age'],
					'religion' 		=> $_POST['religion'],
					'tribe' 		=> $_POST['tribe'],
					'in_favor_of' 	=> $_POST['in_favor_of'],
					'occupation' 	=> $_POST['occupation'],
					'educ_att' 		=> $_POST['educ_att'],
					'address' 		=> $_POST['address'],
					'contact_no' 	=> $_POST['contact_no'],
					'email' 		=> $_POST['email'],
					'barangay_id' 	=> $_POST['barangay_id'],
					'voters_id' 	=> $_POST['voters_id']
				);

			$this->voters_m->save($data, $_POST['id']);
			$query = $this->db->get('eg_voters');
			$voters = $query->last_row();
			$base_url = base_url();
			header('Location: '.$base_url.'admin/voters/edit?id='. $voters->ID);

		}else{
			$tmp = $this->upload->data();
			$image_path = base_url().'uploads/voters/';
			$data = array(
					'surname' 		=> $_POST['surname'],
					'first_name' 	=> $_POST['first_name'],
					'middle_name' 	=> $_POST['middle_name'],
					'extension' 	=> $_POST['extension'],
					'image' 		=> $image_path.$tmp['file_name'],
					'birth_date' 	=> $_POST['birth_date'],
					'gender' 		=> $_POST['gender'],
					'age' 			=> $_POST['age'],
					'religion' 		=> $_POST['religion'],
					'tribe' 		=> $_POST['tribe'],
					'in_favor_of' 	=> $_POST['in_favor_of'],
					'occupation' 	=> $_POST['occupation'],
					'educ_att' 		=> $_POST['educ_att'],
					'address' 		=> $_POST['address'],
					'contact_no' 	=> $_POST['contact_no'],
					'email' 		=> $_POST['email'],
					'barangay_id' 	=> $_POST['barangay_id'],
					'voters_id' 	=> $_POST['voters_id']
				);

			$this->voters_m->save($data, $_POST['id']);
			$query = $this->db->get('eg_voters');
			$voters = $query->last_row();
			$base_url = base_url();
			header('Location: '.$base_url.'admin/voters/edit?id='. $voters->ID);
		}
	}

	public function save(){
		$config['upload_path'] = './uploads/voters/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$tmp = $this->upload->data();
			$image_path = base_url().'uploads/voters/';
			$data = array(
					'surname' 		=> $_POST['surname'],
					'first_name' 	=> $_POST['first_name'],
					'middle_name' 	=> $_POST['middle_name'],
					'extension' 	=> $_POST['extension'],
					'image' 		=> $image_path.$tmp['file_name'],
					'birth_date' 	=> $_POST['birth_date'],
					'gender' 		=> $_POST['gender'],
					'age' 			=> $_POST['age'],
					'religion' 		=> $_POST['religion'],
					'tribe' 		=> $_POST['tribe'],
					'in_favor_of' 	=> $_POST['in_favor_of'],
					'occupation' 	=> $_POST['occupation'],
					'educ_att' 		=> $_POST['educ_att'],
					'address' 		=> $_POST['address'],
					'contact_no' 	=> $_POST['contact_no'],
					'email' 		=> $_POST['email'],
					'barangay_id' 	=> $_POST['barangay_id'],
					'voters_id' 	=> $_POST['voters_id']
				);

			$this->voters_m->save($data);
			$query = $this->db->get('eg_voters');
			$voters = $query->last_row();
			$base_url = base_url();
			header('Location: '.$base_url.'admin/voters/edit?id='. $voters->ID);
			echo "save";
		}
	}


	public function delete(){
		$id = $_GET['id'];
		$this->voters_m->trash($id);
		$this->index();
	}
}
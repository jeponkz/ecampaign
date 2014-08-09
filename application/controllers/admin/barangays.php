<?php

class Barangays extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('barangays_m');
	}

	public function index(){
		$data['query'] = $this->barangays_m->get_by(array('trash' => '0'));
		$data['title'] = 'Barangays';
		$data['message'] = '';
		$this->load->view('admin/barangays/barangays' , $data);
	}

	public function profile(){
		$id = $_GET['id'];
		$data['barangay'] = $this->barangays_m->get($id);
		$data['title'] = 'Barangay Profile';
		$this->load->view('admin/barangays/barangay-profile' , $data);
	}

	public function add(){
		$data['title'] = 'Add Barangay';
		$this->load->view('admin/barangays/add-barangay' , $data);
	}

	public function save(){
		$data = array(
			'name' => $this->input->post('name'),
			'district' => $this->input->post('district'),
			'date_founded' => $this->input->post('date_founded'),
			'land_area' => $this->input->post('land_area'),
			'pp_population' => $this->input->post('pp_population'),
			'location_map' => $this->input->post('location_map'),
			'city_id' => $this->input->post('city_id')
			);
		$this->barangays_m->save($data);
		$query = $this->db->get('eg_barangays');
		$barangay = $query->last_row();
		$base_url = base_url();
		header('Location: '.$base_url.'admin/barangays/edit?id='. $barangay->ID . '&message=0');
	}

	public function edit(){
		$id = $_GET['id'];
		$data['barangay'] = $this->barangays_m->get($id);
		$data['title'] = 'Edit Barangay';
		$data['message'] = '';
		$this->load->view('admin/barangays/edit-barangay' , $data);
	}

	public function update() {
		$id = $_GET['id'];
		$data = array(
			'name' => $this->input->post('name'),
			'district' => $this->input->post('district'),
			'date_founded' => $this->input->post('date_founded'),
			'land_area' => $this->input->post('land_area'),
			'pp_population' => $this->input->post('pp_population'),
			'location_map' => $this->input->post('location_map'),
			'city_id' => $this->input->post('city_id')
			);
		$this->barangays_m->save($data, $id);
		$data['barangay'] = $this->barangays_m->get($id);
		$data['message'] = 'The record has been successfully updated!';
		$data['title'] = 'Edit Barangay'; 
		$this->load->view('admin/barangays/edit-barangay' , $data);
	}

	public function delete(){
		$id = $_GET['id'];
		$this->barangays_m->trash($id);
		$data['query'] = $this->barangays_m->get_by(array('trash' => '0'));
		$data['barangay'] = $this->barangays_m->get($id);
		$data['message'] = 'The record has been successfully moved to trash!';
		$data['title'] = 'Barangays'; 
		$this->load->view('admin/barangays/barangays' , $data);
	}
}
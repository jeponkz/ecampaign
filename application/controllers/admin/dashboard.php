<?php

class Dashboard extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model('cities_m');
	}

	public function index(){
		$city = $this->cities_m->get(1);
		$data['title'] = "Dashboard";
		$data['city'] = $city;
		$this->load->view('admin/dashboard/dashboard', $data);
	}

	public function edit(){
		$id = $_GET['id'];
		$city = $this->cities_m->get($id);
		$data['title'] = "Edit City Profile";
		$data['city'] = $city;
		$data['message'] = '';
		$this->load->view('admin/dashboard/edit-city', $data);
	}

	public function update(){
		$id = $_GET['id'];
		$data = array(
			'name' => $this->input->post('city_name'),
			'region' => $this->input->post('city_region'),
			'province_text' => $this->input->post('province'),
			'date_founded' => $this->input->post('date_founded'),
			'land_area' => $this->input->post('land_area'),
			'pp_population' => $this->input->post('population'),
			'climate' => $this->input->post('climate'),
			'location_map' => $this->input->post('location_map')
			);
		$this->cities_m->save($data, $id);
		$city = $this->cities_m->get($id);
		$data['message'] = 'Record has been successfully updated!';
		$data['title'] = "Edit City Profile";
		$data['city'] = $city;
		$this->load->view('admin/dashboard/edit-city', $data);
	}
}
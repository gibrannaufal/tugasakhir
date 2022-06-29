<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poli extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Poli_Model');
	}

	function index()
	{
		$this->load->view('Poli_view');
	}

	function load_data()
	{
		$data = $this->Poli_Model->load_data();
		echo json_encode($data);
	}

	function insert()
	{
		$data = array(
			'first_name'	=> $this->input->post('first_name'),
			'last_name'		=>	$this->input->post('last_name'),
			'age'			=>	$this->input->post('age')
		);

		$this->Poli_Model->insert($data);
	}

	function update()
	{
		$data = array(
			$this->input->post('table_column')	=>	$this->input->post('value')
		);

		$this->Poli_Model->update($data, $this->input->post('id'));
	}

	function delete()
	{
		$this->Poli_Model->delete($this->input->post('id'));
	}


}

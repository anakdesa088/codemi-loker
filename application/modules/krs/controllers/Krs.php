<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends Manajemen_only 
{
	public function __construct()
	{
		parent::__construct();

		

		
		$this->load->library('form_validation');
		$this->load->model('krs/m_krs');
	}

	/* 
	* It only redirects to the manage Krs page
	*/
	public function index()
	{

		
		$data['kelas'] = $this->m_krs->m_get_kelas();
		$data['dosen'] = $this->m_krs->m_get_dosen();
		$data['mapel'] = $this->m_krs->m_get_mapel();
		$this->template->render('krs/v_krs',$data);	
	}	

	/*
	* It checks if it gets the Krs id and retreives
	* the Krs information from the Krs model and 
	* returns the data into json format. 
	* This function is invoked from the view page.
	*/
	public function fetchKrsDataById($id) 
	{
		if($id) {
			$data = $this->m_krs->getKrsData($id);
			echo json_encode($data);
		}

		return false;
	}

	/*
	* Fetches the Krs value from the Krs table 
	* this function is called from the datatable ajax function
	*/
	public function fetchKrsData()
	{
		$result = array('data' => array());

		$data = $this->m_krs->getKrsData();
		$no =1;
		foreach ($data as $key => $value) {
			
			// button
			$buttons = '';

						
				$buttons .= '<center><button type="button" class="btn btn-warning" onclick="editFunc('.$value['id_krs'].')" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil"></i></button>';
			

			
				$buttons .= ' <button type="button" class="btn btn-danger" onclick="removeFunc('.$value['id_krs'].')" data-toggle="modal" data-target="#removeModal"><i class="fa fa-trash"></i></button></center>';
			
				

			

			$result['data'][$key] = array(
				$no++,	
				$value['nama_mapel'],$value['sks'],$value['semester'],$value['nama_kelas'],$value['nama_lengkap'],
				
				$buttons
			);
		} // /foreach

		echo json_encode($result);
	}

	public function tambah_krs()
	{
		

		$response = array();

		$this->form_validation->set_rules('nama_mapel', 'Mata Kuliah', 'trim');
		$this->form_validation->set_rules('sks', 'Sks', 'trim');

		$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

        if ($this->form_validation->run() == TRUE) {
        	$data = array(
        		'id_mapel' => $this->input->post('nama_mapel'),
        		'sks' => $this->input->post('sks'),

        	);
        	$array = array_merge($data);
        	$create = $this->m_krs->m_tambah_krs($array);
        	if($create == true) {
        		$response['success'] = true;
        		$response['messages'] = 'Succesfully created';
        	}
        	else {
        		$response['success'] = false;
        		$response['messages'] = 'Error in the database while creating the brand information';			
        	}
        }
        else {
        	$response['success'] = false;
        	foreach ($_POST as $key => $value) {
        		$response['messages'][$key] = form_error($key);
        	}
        }

        echo json_encode($response);
	}
	public function edit_krs($id)
	{


		$response = array();

		if($id) {
			$this->form_validation->set_rules('nama_mapel', 'Mata Kuliah', 'trim|required');
			$this->form_validation->set_rules('sks', 'Sks', 'trim|required');

			$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');

	        if ($this->form_validation->run() == TRUE) {
	        	$data = array(
	        		'id_mapel' => $this->input->post('nama_mapel'),
	        		'sks' => $this->input->post('sks'),	
	        	);

	        	$update = $this->m_krs->m_edit_krs($data, $id);
	        	if($update == true) {
	        		$response['success'] = true;
	        		$response['messages'] = 'Succesfully updated';
	        	}
	        	else {
	        		$response['success'] = false;
	        		$response['messages'] = 'Error in the database while updated the brand information';			
	        	}
	        }
	        else {
	        	$response['success'] = false;
	        	foreach ($_POST as $key => $value) {
	        		$response['messages'][$key] = form_error($key);
	        	}
	        }
		}
		else {
			$response['success'] = false;
    		$response['messages'] = 'Error please refresh the page again!!';
		}

		echo json_encode($response);
	}


	/*
	* Its checks the Krs form validation 
	* and if the validation is successfully then it inserts the data into the database 
	* and returns the json format operation messages
	*/
	

	/*
	* Its checks the Krs form validation 
	* and if the validation is successfully then it updates the data into the database 
	* and returns the json format operation messages
	*/
	
	/*
	* It removes the Krs information from the database 
	* and returns the json format operation messages
	*/
	

}
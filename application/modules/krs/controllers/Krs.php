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

		
		$data['tampil'] =$this->m_krs->m_data_krs();
		$this->template->render('krs/v_krs',$data);	
	}	
	

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
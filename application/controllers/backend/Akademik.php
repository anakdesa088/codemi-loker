<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->model('m_akademik'); 
		$this->load->model('m_pmb'); 
		$this->load->model('m_keuangan'); 
		$this->load->library('akper/template',[
			'base_view'     => 'template/layout',
			'partial_view'  => [
					'header'        => 'template/header',
					'sidebar'       => 'template/sidebar',
					'footer'        => 'template/footer',
				]
			]);		
		$this->load->library('akper/auth_akper');
		if (!$this->auth_akper->is_login('manajemen')) 
		{
			return redirect('backend/auth');
		}
	}
	public function index()
	{
		$data['tampil'] = $this->m_akademik->m_get_pmb();
		$this->template->render('content/akademik/pmb/v_data_pmb',$data);
	}

	public function c_status_valid($id)
	{
		// $status = "valid";
		$array = array('status_data'=>"1");
		$data = $this->m_keuangan->m_status_valid($id,$array);
		if ($data > 0) 
		{
			$this->m_pmb->is_get_no_ujian($id);
			redirect('backend/akademik/index');
		}
	}
	public function c_status_invalid($id){
		// $status = "invalid";
		// $level = "pmb_lamah";
		// $array = array('status'=>$status,'level'=>$level);
		$array = array('status_data'=>"0");
		$data = $this->m_keuangan->m_status_invalid($id,$array);
		if ($data > 0) {
			redirect('backend/akademik/index');
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends Manajemen_only 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('akademik/m_akademik'); 
		$this->load->model('pmb/m_pmb'); 
		$this->load->model('keuangan/m_keuangan'); 
	}
	public function index()
	{
		$data['tampil'] = $this->m_akademik->m_get_pmb();
		$this->template->render('akademik/v_data_pmb',$data);
	}

	public function c_status_valid($id)
	{
		// $status = "valid";
		$array = array('status_data'=>"1");
		$data = $this->m_keuangan->m_status_valid($id,$array);
		if ($data > 0) 
		{
			$this->m_pmb->is_get_no_ujian($id);
			redirect('akademik/index');
		}
	}
	public function c_status_invalid($id){
		// $status = "invalid";
		// $level = "pmb_lamah";
		// $array = array('status'=>$status,'level'=>$level);
		$array = array('status_data'=>"0");
		$data = $this->m_keuangan->m_status_invalid($id,$array);
		if ($data > 0) {
			redirect('akademik/index');
		}
	}
	public function hapus_akademik(){
	$id_pmb = $this->input->post('id_pmb');

		$response = array();
		if($id_pmb) {
			$delete = $this->m_akademik->m_hapus_akademik($id_pmb);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus data PMB</span></div>
');	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Gagal";
			}
		}
		else {
			$response['success'] = false;
			redirect('keuangan');
		}

		echo json_encode($response);
	}

	public function fetchAkademikDataById($id) 
	{
		if($id) {
			$data = $this->m_akademik->getAkademikData($id);
			echo json_encode($data);
		}

		return false;
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester extends Manajemen_only {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_semester');
		$this->not_logged_in();
		$this->sesi_mahasiswa();
	}
	public function index()
	{
		$data['tampil'] = $this->m_semester->m_data_semester();
		$this->template->render('semester/v_semester',$data);
	}
	public function tambah_semester(){
		$this->template->render('semester/v_tambah_semester');	
	}
	public function proses_tambah_semester(){
		$nama_semester = $this->input->post('nama_semester');
		$keterangan = $this->input->post('keterangan');
		$array = array('nama_semester'=>$nama_semester,'keterangan'=>$keterangan);
		$tambah = $this->m_semester->m_porses_tambah_semester($array);
		if ($tambah > 0 ) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span>Menambah Semester </span></div>');
			redirect('semester');
		}else{
				$this->session->set_flashdata('sukses','<div class="alert alert-danger" role="alert"> <strong>Gagal</strong> <span>Menambah Semester </span></div>');
			redirect('semester/tambah_semester');
		}
	}
	public function edit_semester($id){
		$cek_id = $this->m_semester->m_cek_id($id);
		if ($cek_id) {
			$data['tampil'] = $this->m_semester->m_edit_semester($id);
		$this->template->render('semester/v_edit_semester',$data);
		}else{
			redirect('semester');
		}
	}
	public function proses_edit_semester($id){
		$nama_semester = $this->input->post('nama_semester');
		$keterangan = $this->input->post('keterangan');
		$array = array('nama_semester'=>$nama_semester,'keterangan'=>$keterangan);
		$tambah = $this->m_semester->m_porses_edit_semester($id,$array);
		if ($tambah > 0 ) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span>Edit Semester </span></div>');
			redirect('semester');
		}else{
				$this->session->set_flashdata('sukses','<div class="alert alert-danger" role="alert"> <strong>Gagal</strong> <span>Edit Semester </span></div>');
			redirect('semester/edit_semester/'.$id);
		}
	}
	public function hapus_semester(){
		$id_semester = $this->input->post('id_semester');

		$response = array();
		if($id_semester) {
			$delete = $this->m_semester->m_hapus_semester($id_semester);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus Semester</span></div>
					');	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Gagal";
			}
		}
		else {
			$response['success'] = false;
			redirect('mapel');
		}

		echo json_encode($response);
	}

	public function fetchSemesterlDataById($id) 
	{
		if($id) {
			$data = $this->m_semester->getSemesterlData($id);
			echo json_encode($data);
		}

		return false;
	}


}

/* End of file Semester.php */
/* Location: ./application/modules/semester/controllers/Semester.php */
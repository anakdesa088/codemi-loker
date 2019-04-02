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
	public function tambah_krs(){
		$data['mapel'] = $this->m_krs->m_get_mapel();
		$data['kelas'] = $this->m_krs->m_get_kelas();
		$data['dosen'] = $this->m_krs->m_get_dosen();
		$this->template->render('krs/v_tambah_krs',$data);
	}
	public function proses_tambah_krs()
	{
		$this->form_validation->set_rules('mapel', 'Mata Kuliah', 'trim|required');
		$this->form_validation->set_rules('sks', 'Sks', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('dosen', 'Dosen', 'trim|required');
		if ($this->form_validation->run()) {
			$mapel = $this->input->post('mapel');
			$sks = $this->input->post('sks');
			$semester = $this->input->post('semester');
			$kelas = $this->input->post('kelas');
			$dosen = $this->input->post('dosen');

			$data = array(
				'id_mapel'=>$mapel,
				'sks' => $sks,
				'semester'=>$semester,
				'id_krs'=>$kelas,
				'id_dosen'=>$dosen


			);
			$relasi = array_merge($data);
			$tambah = $this->m_krs->m_proses_tambah_krs($relasi);
			if ($tambah > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil ! </strong> <span>Edit Krs </span></div>');
			return redirect('krs');
			}else{
				$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <strong>Gagal ! </strong> <span>Edit Krs </span></div>');
				return redirect('krs');
			}

		}else{
			$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <strong>Maaf</strong> <span>Semua Form harus diisi</span></div>');
		}
	}

	public function edit_krs($id){
		$data['tampil'] = $this->m_krs->m_edit_krs($id);
		$data['mapel'] = $this->m_krs->m_get_mapel();
		$data['kelas'] = $this->m_krs->m_get_kelas();
		$data['dosen'] = $this->m_krs->m_get_dosen();
		$this->template->render('krs/v_edit_krs',$data);
	}
	public function proses_edit_krs($id){
			$this->form_validation->set_rules('mapel', 'Mata Kuliah', 'trim|required');
		$this->form_validation->set_rules('sks', 'Sks', 'trim|required');
		$this->form_validation->set_rules('semester', 'Semester', 'trim|required');
		$this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
		$this->form_validation->set_rules('dosen', 'Dosen', 'trim|required');
		if ($this->form_validation->run()) {
			$mapel = $this->input->post('mapel');
			$sks = $this->input->post('sks');
			$semester = $this->input->post('semester');
			$kelas = $this->input->post('kelas');
			$dosen = $this->input->post('dosen');

			$data = array(
				'id_mapel'=>$mapel,
				'sks' => $sks,
				'semester'=>$semester,
				'id_krs'=>$kelas,
				'id_dosen'=>$dosen


			);
			$relasi = array_merge($data);
			$tambah = $this->m_krs->m_proses_edit_krs($id,$relasi);
			if ($tambah > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil ! </strong> <span>Edit Krs </span></div>');
			return redirect('krs');
			}else{
				$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <strong>Gagal ! </strong> <span>Edit Krs </span></div>');
				return redirect('krs');
			}

		}else{
			$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <strong>Maaf</strong> <span>Semua Form harus diisi</span></div>');
		}

	}
	public function hapus_krs(){
	$id_krs = $this->input->post('id_krs');

		$response = array();
		if($id_krs) {
			$delete = $this->m_krs->m_hapus_krs($id_krs);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus data Krs</span></div>
');	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Gagal";
			}
		}
		else {
			$response['success'] = false;
			redirect('kelas');
		}

		echo json_encode($response);
	}

	public function fetchKrsDataById($id) 
	{
		if($id) {
			$data = $this->m_krs->getKrsData($id);
			echo json_encode($data);
		}

		return false;
	}
	
		# code...
	public function cetak()
	{
		$this->template->render('krs/v_cetak');
	}
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
	


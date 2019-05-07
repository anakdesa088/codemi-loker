<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends Manajemen_only {
	public function __construct(){
		parent::__construct();
		$this->load->model('mapel/m_mapel');
		$this->not_logged_in();
		$this->sesi_mahasiswa();
	}

	public function index()
	{

		$data['tampil'] = $this->m_mapel->m_getMapel();

		$this->template->render('mapel/v_mapel',$data);
		
	}
	public function tambah_mapel(){
		$this->template->render('mapel/v_tambah_mapel');
	}
	public function proses_tambah_mapel(){
		$nama_mapel = $this->input->post('nama_mapel');
		$kode_mapel =$this->input->post('kode_mapel');
		$keterangan_mapel = $this->input->post('keterangan_mapel');

		$array = array('nama_mapel'=>$nama_mapel,'kode_mapel'=>$kode_mapel,'keterangan_mapel'=>$keterangan_mapel);

		$tambah = $this->m_mapel->m_proses_tambah_mapel($array);
		if ($tambah > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span>Menambah Meata Pelajran </span></div>');
			redirect('mapel');
		}else{

		}

	}
	public function edit_mapel($id){
		$link_id = $this->m_mapel->m_cek_id($id);
		if ($link_id) {
			


			$data['tampil'] = $this->m_mapel->m_edit_mapel($id);
			$this->template->render('mapel/v_edit_mapel',$data);
		}else{
			redirect('mapel');
		}
	}
	public function proses_edit_mapel($id){
		$nama_mapel = $this->input->post('nama_mapel');
		$kode_mapel =$this->input->post('kode_mapel');
		$keterangan_mapel = $this->input->post('keterangan_mapel');
		$array = array('nama_mapel'=>$nama_mapel,'kode_mapel'=>$kode_mapel,'keterangan_mapel'=>$keterangan_mapel);
		$edit = $this->m_mapel->m_proses_edit_mapel($id,$array);
		if ($edit > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span>Edit Meata Pelajran '.$nama_mapel.' </span></div>');
			redirect('mapel');
		}else{
			echo "salah";
		}
	}
	public function hapus_mapel(){
		$id_mapel = $this->input->post('id_mapel');

		$response = array();
		if($id_mapel) {
			$delete = $this->m_mapel->m_hapus_mapel($id_mapel);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus data Mata Pelajran</span></div>
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

	public function fetchMapelDataById($id) 
	{
		if($id) {
			$data = $this->m_mapel->getMapelData($id);
			echo json_encode($data);
		}

		return false;
	}




}


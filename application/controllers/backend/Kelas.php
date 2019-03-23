<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends MY_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_kelas');
	}

	public function index()
	{
		$data['tampil']  = $this->m_kelas->m_get_kelas();
		$this->template->render('kelas/v_kelas',$data);
	}
	public function tambah_kelas(){
		$this->template->render('kelas/v_tambah_kelas');
	}
	public function proses_tambah_kelas(){
		$array = array(
			'nama_kelas'=>$this->input->post('nama_kelas', true),
			'kode_kelas'=>$this->input->post('kode_kelas', true),
			'keterangan_kelas'=> $this->input->post('keterangan_kelas',true)

		);
		$kelas = $this->input->post('nama_kelas');
		$tambah = $this->m_kelas->m_proses_tambah_kelas($array);
		if ($tambah > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil ! </strong> <span>Menambah Kelas '.$kelas.'</span></div>
');
			return redirect('backend/kelas');
		}
	}
	public function edit_kelas($id){
		$data['tampil'] = $this->m_kelas->m_edit_kelas($id);
		$this->template->render('kelas/v_edit_kelas',$data);

	}
	public function proses_edit_kelas($id){
		$array = array(
			'nama_kelas'=>$this->input->post('nama_kelas', true),
			'kode_kelas'=>$this->input->post('kode_kelas', true),
			'keterangan_kelas'=> $this->input->post('keterangan_kelas',true)

		);
		$kelas = $this->input->post('nama_kelas');
		$edit = $this->m_kelas->m_proses_edit_kelas($id,$array);
		$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil ! </strong> <span>Edit Kelas '.$kelas.'</span></div>');
		if ($edit > 0) {
			redirect('backend/kelas');
		}
	}
	public function hapus_kelas($id){
		$hapus = $this->m_kelas->m_hapus_kelas($id);
		if ($hapus > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil ! </strong> <span>Hapus Kelas </span></div>');
			return redirect('backend/kelas');
		}
	}

}


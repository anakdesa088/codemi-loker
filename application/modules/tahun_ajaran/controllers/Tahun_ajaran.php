<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_ajaran extends Manajemen_only {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_tahun_ajaran');
		$this->not_logged_in();
		$this->sesi_mahasiswa();
	}
	public function index()
	{	
		$data['tampil'] = $this->m_tahun_ajaran->m_data_tahun_ajaran();
		$this->template->render('tahun_ajaran/v_tahun_ajaran',$data);
	}
	public function tambah_tahun_ajaran(){
		$this->template->render('tahun_ajaran/v_tambah_tahun_ajaran');
	}
	public function proses_tambah_tahun_ajaran(){
		$tahun_ajarancol = $this->input->post('tahun_ajarancol');
		$keterangan = $this->input->post('keterangan');
		$array = array('tahun_ajarancol'=>$tahun_ajarancol,'keterangan'=>$keterangan);
		$tambah = $this->m_tahun_ajaran->m_proses_tambah_tahun_ajaran($array);
		if ($tambah > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span>Tambah Tahun Ajaran </span></div>');
			redirect('tahun_ajaran');
		}else{
			$this->session->set_flashdata('sukses','<div class="alert alert-danger" role="alert"> <strong>Gagal</strong> <span>Tambah Tahun Ajaran </span></div>');
			redirect('tahun_ajaran');

		}
	}
	public function edit_tahun_ajaran($id){
		$data['tampil'] = $this->m_tahun_ajaran->m_edit_tahun_ajaran($id);
		$this->template->render('tahun_ajaran/v_edit_tahun_ajaran',$data);
	}
	public function proses_edit_tahun_ajaran($id){
		$tahun_ajarancol = $this->input->post('tahun_ajarancol');
		$keterangan = $this->input->post('keterangan');
		$array = array('tahun_ajarancol'=>$tahun_ajarancol,'keterangan'=>$keterangan);
		$tambah = $this->m_tahun_ajaran->m_proses_edit_tahun_ajaran($id,$array);
		if ($tambah > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span>Edit Tahun Ajaran </span></div>');
			redirect('tahun_ajaran');
		}else{
			$this->session->set_flashdata('sukses','<div class="alert alert-danger" role="alert"> <strong>Gagal</strong> <span>Edit Tahun Ajaran </span></div>');
			redirect('tahun_ajaran');

		}
	}

}

/* End of file Tahun_ajaran.php */
/* Location: ./application/modules/tahun_ajaran/controllers/Tahun_ajaran.php */
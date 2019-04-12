<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_wali extends Manajemen_only {
	public function __construct(){
		parent::__construct();
		$this->load->model('dosen_wali/m_dosen_wali');
	}
	public function index()
	{
		$data['tampil'] = $this->m_dosen_wali->m_data_dosen_wali();
		$this->template->render('dosen_wali/v_dosen_wali',$data);
	}
	public function tambah_dosen_wali(){
		$data['dosen'] = $this->m_dosen_wali->m_dosen();
		$data['kelas'] = $this->m_dosen_wali->m_kelas();
		$this->template->render('dosen_wali/v_tambah_dosen_wali',$data);
	}
	public function proses_tambah_dosen_wali()
	{
		$dosen = $this->input->post('dosen');
		$kelas = $this->input->post('kelas');
		$keterangan= $this->input->post('keterangan');

		$array = array('id_dosen'=>$dosen,'id_kelas'=>$kelas,'keterangan'=>$keterangan);
		$relasi = array_merge($array);
		$tambah = $this->m_dosen_wali->m_proses_tambah_dosen_wali($relasi);
		if ($tambah > 0) {
			$this->session->set_flashdata('berhasil','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menambah  Dosen Wali</span></div>');
			return redirect('dosen_wali');
		}else{
			$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <strong>Gagal</strong> <span> Menambah  Dosen Wali</span></div>');
			return redirect('dosen_wali/tambah_dosen_wali');
		}
	}

}

/* End of file Dosen_wali.php */
/* Location: ./application/modules/dosen_wali/controllers/Dosen_wali.php */
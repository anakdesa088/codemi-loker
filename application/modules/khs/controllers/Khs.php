<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khs extends Manajemen_only {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_khs');
	}
	public function index()
	{
		$data['tampil'] = $this->m_khs->m_data_khs();
		$this->template->render('khs/v_khs',$data);
	}
	public function tambah_khs(){
		$data['mapel'] = $this->m_khs->m_mapel();
		$this->template->render('khs/v_tambah_khs',$data);
	}
	public function proses_tambah_khs(){
		
		$this->form_validation->set_rules('mapel','Mata Kuliah',  'trim|required');
		$this->form_validation->set_rules( 'sks','SKS', 'trim|required');
		$this->form_validation->set_rules( 'nilai_mutu','Nilai Mutu', 'trim|required');
		$this->form_validation->set_rules( 'nilai_lambang','Nilai Lambang', 'trim|required');
		$this->form_validation->set_rules( 'nilai_sks','Nilai SKS', 'trim|required');
		if ($this->form_validation->run()) {
			# code...
		

		$mapel = $this->input->post('mapel');
		$sks = $this->input->post('sks');
		$nilai_mutu = $this->input->post('nilai_mutu');
		$nilai_lambang = $this->input->post('nilai_lambang');
		$nilai_sks = $this->input->post('nilai_sks');

		$array = array('id_mapel'=>$mapel,'sks'=>$sks,'nilai_mutu'=>$nilai_mutu,'nilai_lambang'=>$nilai_lambang,'nilai_sks'=>$nilai_sks);
		$data = array_merge($array);
		$tambah = $this->m_khs->m_proses_tambah_khs($data);
		if ($tambah > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil ! </strong> <span>Tambah KHS </span></div>');
			return redirect('khs');
		}else{
			
		}
	}else{
		$this->session->set_flashdata('gagal','<div class="alert alert-warning" role="alert"> <span>Semua Form Harus diisi </span></div>');
		return redirect('khs/tambah_khs');
	}
	}

}

/* End of file Khs.php */
/* Location: ./application/modules/khs/controllers/Khs.php */
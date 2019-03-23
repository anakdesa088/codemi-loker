<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends MY_Controller {
function __construct(){
		parent::__construct();
		$this->load->model(array('m_mahasiswa','m_kelas'));

	}
	
	public function index()
	{
		
		$data['tampil'] = $this->m_mahasiswa->m_get_mahasiswa();
		$this->template->render('mahasiswa/v_mahasiswa',$data);

	}
	public function tambah_mahasiswa(){
		$this->template->render('mahasiswa/v_tambah_mahasiswa');

	}
	public function prorses_tambah_mahasiswa(){

	}
	public function edit_mahasiswa(){

	}
	public function proses_edit_mahasiswa(){

	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/backend/Mahasiswa.php */
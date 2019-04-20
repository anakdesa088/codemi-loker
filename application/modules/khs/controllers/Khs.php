<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khs extends Manajemen_only {

	public function __construct(){

		parent::__construct();
		$this->load->model('m_khs');
	}
	public function index(){


		$this->template->render('khs/v_khs');


	}
	public function find(){
		$nim = $this->input->post('nim');

		$cek = $this->m_khs->m_cek_kelas($nim);
		foreach ($cek as $r) {
			$kelas = $r->id_kelas;
		}
		$data['tampil'] = $this->m_khs->m_tampil($kelas);
		$data['mahasiswa'] = $this->m_khs->m_mahasiswa($nim);
		$this->template->render('khs/v_khs',$data);

	}








}
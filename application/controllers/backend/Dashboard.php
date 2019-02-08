<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('m_dashboard');
}
	
	public function index()
	{	
		$data['isi'] = 'content/home.php';
		$this->load->view('template/layout', $data);
	}

	public function keuangan(){
		$data['tampil'] = $this->m_dashboard->m_get_pmb();
		$data['isi'] = 'content/keuangan/pmb/v_data_pmb.php';
		$this->load->view('template/layout',$data);
	}
	public function tambah_keuangan(){
		$data['isi'] = 'content/keuangan/pmb/v_tambah_pmb.php';
		$this->load->view('template/layout', $data);
	}
}

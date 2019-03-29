<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Manajemen_only 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard/m_dashboard');
	}
	public function index()
	{	
		$this->template->render('dashboard/v_dashboard');
	}
	public function keuangan()
	{
		$data['tampil'] = $this->m_dashboard->m_get_pmb();
		$data['isi'] = 'content/keuangan/pmb/v_data_pmb.php';
		$this->load->view('testview/template/layout',$data);
	}
	public function tambah_keuangan()
	{
		$data['isi'] = 'content/keuangan/pmb/v_tambah_pmb.php';
		$this->load->view('testview/template/layout', $data);
	}
	
}

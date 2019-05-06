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
		$this->not_logged_in();
		if($id_mhs = $this->session->userdata('id_mahasiswa')){
		$data['tampil'] = $this->m_dashboard->m_transaksi_mhs($id_mhs);
		$this->template->render('dashboard/v_dashboard',$data);	
		}else{
			$data['tampil'] = $this->m_dashboard->m_transaksi();
		$this->template->render('dashboard/v_dashboard',$data);
		}
		
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

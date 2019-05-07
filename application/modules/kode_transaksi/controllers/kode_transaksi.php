<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kode_transaksi extends Manajemen_only {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_kode_transaksi');
		$this->not_logged_in();
		$this->sesi_mahasiswa();
	}
	public function index()
	{				
				
				
				$this->template->render('kode_transaksi/v_kode_transaksi');
	}
	public function view_kode_transaksi(){
		$kode_transaksi = $this->input->post('kode_transaksi');
		$cek = $this->m_kode_transaksi->m_cek($kode_transaksi);
		foreach ($cek as $r) {
			$a = $r->id_mahasiswa;
		}
		;
		$data['mahasiswa'] = $this->m_kode_transaksi->m_mahasiswa($a);
		$data['tampil'] = $this->m_kode_transaksi->m_data_transaksi($kode_transaksi);
		$this->template->render('kode_transaksi/v_view_kode_transaksi',$data);
	}

}

/* End of file kode_transaksi.php */
/* Location: ./application/modules/kode_transaksi/controllers/kode_transaksi.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran_mhs extends Manajemen_only {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_pembayaran_mhs');
		$this->not_logged_in();
	}
	public function index()
	{
			$this->template->render('pembayaran_mhs/v_pembayaran_mhs');
	}

}

/* End of file Pembayaran_mhs.php */
/* Location: ./application/modules/pembayaran_mhs/controllers/Pembayaran_mhs.php */
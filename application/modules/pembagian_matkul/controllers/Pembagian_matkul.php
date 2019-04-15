<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembagian_matkul extends Manajemen_only {
	public function __construct(){
		parent::__construct();
		$this->load->model('pembagian_matkul/m_pembagian_matkul');
	}

	public function index()
	{
	$data['kelas']	 = $this->m_pembagian_matkul->m_kelas();
	$data['mapel'] = $this->m_pembagian_matkul->m_mapel();
	$data['tampil'] = $this->m_pembagian_matkul->m_tampil();
	$this->template->render('pembagian_matkul/v_pembagian_matkul',$data);
	}

}

/* End of file Pembagian_matkul.php */
/* Location: ./application/modules/pembagian_matkul/controllers/Pembagian_matkul.php */
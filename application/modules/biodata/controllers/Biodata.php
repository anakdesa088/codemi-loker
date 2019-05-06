<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends Manajemen_only {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_biodata');
	}
	public function index()
	{
		$id = $this->session->userdata('id_mahasiswa');
		$data['tampil'] = $this->m_biodata->m_data_biodata($id);
		$this->template->render('biodata/v_biodata',$data);
		
	}

}

/* End of file Biodata.php */
/* Location: ./application/modules/biodata/controllers/Biodata.php */
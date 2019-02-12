<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('m_akademik'); 
}
public function index(){
	$data['tampil'] = $this->m_akademik->m_get_pmb();
	$data['isi'] = 'content/akademik/pmb/v_data_pmb.php';
	$this->load->view('template/layout',$data);
}

}
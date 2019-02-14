<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('m_mahasiswa'); 
	
}



public function index($id){
	$data['tampil'] = $this->m_mahasiswa->m_get_mhs($id);
	$data['isi'] = 'content/home.php';
	$this->load->view('template/layout',$data);
}

}

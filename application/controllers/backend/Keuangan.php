<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keuangan extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('m_keuangan'); 
	
}
public function index(){
	$data['tampil'] = $this->m_keuangan->m_get_pmb();
	$data['isi'] = 'content/keuangan/pmb/v_data_pmb.php';
	$this->load->view('template/layout',$data);
}
public function c_aktip($id){
	$data['tampil']	= $this->m_keuangan->m_aktip($id);
	$data['isi'] = 'content/keuangan/pmb/v_edit_pmb.php';
	$this->load->view('template/layout',$data);	
}
public function c_kirim($id){
	$nama_lengkap = $this->input->view('nama_lengkap');
	$array = array('nama_lengkap');
}
public function c_delete($id){
	$hapus = $this->m_keuangan->m_delete($id);
	if ($hapus > 0) {
		$this->session->set_flashdata('hapus','<div class="alert alert-success">Berhasil Hapus Data</div>');
		redirect('backend/keuangan/index');
	}
}
public function detail($id){
	$data['tampil'] = $this->m_keuangan->m_detail($id);
	$data['isi'] = 'content/keuangan/pmb/v_detail_pmb.php';
	$this->load->view('template/layout',$data);
}
public function c_status_valid($id){
	$status = "valid";
	$array = array('status'=>$status);
	$data = $this->m_keuangan->m_status_valid($id,$array);
	if ($data > 0) {
		redirect('backend/keuangan/index');
	}
}
public function c_status_invalid($id){
	$status = "invalid";
	$array = array('status'=>$status);
	$data = $this->m_keuangan->m_status_invalid($id,$array);
	if ($data > 0) {
		redirect('backend/keuangan/index');
	}
}
}
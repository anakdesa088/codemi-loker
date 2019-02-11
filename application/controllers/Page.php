<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

function __construct(){
	parent::__construct();
	$this->load->model('m_page');
}

	public function index(){
		
	}

	public function pmb($id){

		$data['tampil'] = $this->m_page->m_get_id($id);
		$this->load->view('frontend/pmb/v_pmb', $data);

	}
	public function c_proses_pmb($id){
		
  $nama_lengkap = $this->input->post('nama_lengkap');
  $email = $this->input->post('email');
  $password = $this->input->post('password');
  $kewarganegaraan = $this->input->post('kewarganegaraan');
  $jk = $this->input->post('jk');
  $tinggi_badan = $this->input->post('tinggi_badan');
  $berat_badan = $this->input->post('berat_badan');
  $tmpt_lahir = $this->input->post('tmpt_lahir');
  $tgl_lahir = $this->input->post('tgl_lahir');
  $alamat = $this->input->post('alamat');
  $kode_pos = $this->input->post('kode_pos');
  $nama_ayah = $this->input->post('nama_ayah');
  $nama_ibu = $this->input->post('nama_ibu');
  $no_hp1 = $this->input->post('no_hp1');
  $no_hp2 = $this->input->post('no_hp2');
  $info_dari = $this->input->post('info_dari');
  $nama_asal_sekolah = $this->input->post('nama_asal_sekolah');
  $alamat_asal_sekolah = $this->input->post('alamat_asal_sekolah');
  $foto = $this->input->post('foto');
  $foto_ijaza = $this->input->post('foto_ijaza');
  $foto_kesehatan = $this->input->post('foto_kesehatan');



  $array = array('nama_lengkap'=>$nama_lengkap,'kewarganegaraan'=>$kewarganegaraan,'jk'=>$jk,'tinggi_badan'=>$tinggi_badan,'berat_badan'=>$berat_badan,'tmpt_lahir'=>$tmpt_lahir,'tgl_lahir'=>$tgl_lahir,'alamat'=>$alamat,'kode_pos'=>$kode_pos,'nama_ayah'=>$nama_ayah,'nama_ibu'=>$nama_ibu,'no_hp1'=>$no_hp1,'no_hp2'=>$no_hp2,'info_dari'=>$info_dari,'nama_asal_sekolah'=>$nama_asal_sekolah,'alamat_asal_sekolah'=>$alamat_asal_sekolah); 

	
	$daftar = $this->m_page->m_proses_pmb($id,$array);
	if ($daftar > 0) {
		echo "sukses";
	}else{
		echo "salah";
	}






	}
	function pmb_view($id){
		$data['tampil'] = $this->m_page->m_pmb_view($id);
		$this->load->view('frontend/pmb_view',$data);
	}

}
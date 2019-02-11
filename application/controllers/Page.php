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
	public function proses_pmb($id){
		
$nama_lengkap = $this->input->post('nama_lengkap');
$kewarganegaraan = $this->input->post('kewarganegaraan');
$jenis_kelamin = $this->input->post('jenis_kelamin');
$tinggi_badan = $this->input->post('tinggi_badan');
$berat_badan = $this->input->post('berat_badan');
$tempat_lahir = $this->input->post('tempat_lahir');
$date = date_create($this->input->post('tanggal_lahir'));
$tanggal_lahir =  date_format($date,'Y-m-d H:i:s');


$alamat = $this->input->post('alamat');
$nama_ayah = $this->input->post('nama_ayah');
$nama_ibu = $this->input->post('nama_ibu');
$kode_pos = $this->input->post('kode_pos');
$no_hp = $this->input->post('no_hp');
$info_dari = $this->input->post('info_dari');
$nama_sekolah_asal = $this->input->post('nama_sekolah_asal');
$alamat_asal_sekolah	 = $this->input->post('alamat_asal_sekolah');

	$array = array('nama_lengkap'=>$nama_lengkap,'kewarganegaraan'=>$kewarganegaraan,'jenis_kelamin'=>$jenis_kelamin,'tinggi_badan'=>$tinggi_badan,'berat_badan'=>$tinggi_badan,'tempat_lhr'=>$tempat_lahir,'tanggal_lhr'=>$tanggal_lahir,'almt_lengkap'=>$alamat,'kode_pos'=>$kode_pos,'no_hp'=>$no_hp,'info_dari'=>$info_dari,'nama_asal_sklh'=>$nama_sekolah_asal,'almt_asal_sklh'=>$alamat_asal_sekolah,'ayah'=>$nama_ayah,'ibu'=>$nama_ibu);
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
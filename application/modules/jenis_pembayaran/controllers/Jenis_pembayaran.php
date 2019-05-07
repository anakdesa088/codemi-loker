<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis_pembayaran extends Manajemen_only {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_jenis_pembayaran');
		$this->not_logged_in();
		$this->sesi_mahasiswa();
	}
	public function index()
	{
		$data['tampil'] = $this->m_jenis_pembayaran->m_tampil();
		$this->template->render('jenis_pembayaran/v_jenis_pembayaran',$data);

	}
	public function tambah_jenis_pembayaran(){
		$nama = $this->input->post('nama_jp');
		$kode = $this->input->post('kode_jp');
		$nominal = $this->input->post('nominal');
		$keterangan = $this->input->post('keterangan_jp');
		$array = array('nama_jp'=>$nama,'nominal'=>$nominal,'kode_jp'=>$kode,'keterangan_jp'=>$keterangan);
		$tambah = $this->m_jenis_pembayaran->m_tambah_jenis_pembayaran($array);
		if ($tambah > 0) {
			
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>BERHASIL ! </strong> <span>TAMBAH JENIS PEMBAYARAN </span></div>');
			redirect('jenis_pembayaran');
		}else{
			$this->session->set_flashdata('sukses','<div class="alert alert-danger" role="alert"> <strong>GAGAL ! </strong> <span>TAMBAH JENIS PEMBAYARAN </span></div>');
			redirect('jenis_pembayaran');
		}

	}
	public function edit_jenis_pembayaran($id){
		$link = $this->m_jenis_pembayaran->m_cek_id($id);
		if ($link) {
		$data['tampil']  = $this->m_jenis_pembayaran->m_edit_jenis_pembayaran($id);
		$this->template->render('jenis_pembayaran/v_edit_jenis_pembayaran',$data);	
		}else{
			redirect('jenis_pembayaran');
		}
		
	}
	public function proses_edit_jenis_pembayaran($id){
		$nama = $this->input->post('nama_jp');
		$kode = $this->input->post('kode_jp');
		$nominal = $this->input->post('nominal');
		$keterangan = $this->input->post('keterangan_jp');
		$array = array('nama_jp'=>$nama,'nominal'=>$nominal,'kode_jp'=>$kode,'keterangan_jp'=>$keterangan);
		
		$edit = $this->m_jenis_pembayaran->m_proses_edit_pembayaran($id,$array);

		if ($edit > 0) {
			
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>BERHASIL ! </strong> <span>EDIT JENIS PEMBAYARAN </span></div>');
			redirect('jenis_pembayaran');
		}else{
			$this->session->set_flashdata('sukses','<div class="alert alert-danger" role="alert"> <strong>GAGAL ! </strong> <span>EDIT JENIS PEMBAYARAN </span></div>');
			redirect('jenis_pembayaran');
		}
	}

	public function hapus_jenis_pembayaran(){
	$id_jp = $this->input->post('id_jp');

		$response = array();
		if($id_jp) {
			$delete = $this->m_jenis_pembayaran->m_hapus_jenis_pembayaran($id_jp);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus data dosen</span></div>
');	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Gagal";
			}
		}
		else {
			$response['success'] = false;
			redirect('dosen');
		}

		echo json_encode($response);
	}

	public function fetchJenisPembayaranDataById($id) 
	{
		if($id) {
			$data = $this->m_jenis_pembayaran->getJenisPembayaranData($id);
			echo json_encode($data);
		}

		return false;
	}

}

/* End of file Jenis_pembayaran.php */
/* Location: ./application/modules/jenis_pembayaran/controllers/Jenis_pembayaran.php */
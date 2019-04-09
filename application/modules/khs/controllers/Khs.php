<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khs extends Manajemen_only {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_khs');
	}
	public function index()
	{
		$data['tampil'] = $this->m_khs->m_data_khs();
		$this->template->render('khs/v_khs',$data);
	}
	public function tambah_khs(){
		$data['mapel'] = $this->m_khs->m_mapel();
		$this->template->render('khs/v_tambah_khs',$data);
	}
	public function proses_tambah_khs(){
		
		$this->form_validation->set_rules('mapel','Mata Kuliah',  'trim|required');
		$this->form_validation->set_rules( 'sks','SKS', 'trim|required');
		$this->form_validation->set_rules( 'nilai_mutu','Nilai Mutu', 'trim|required');
		$this->form_validation->set_rules( 'nilai_lambang','Nilai Lambang', 'trim|required');
		$this->form_validation->set_rules( 'nilai_sks','Nilai SKS', 'trim|required');
		if ($this->form_validation->run()) {
			# code...
		

		$mapel = $this->input->post('mapel');
		$sks = $this->input->post('sks');
		$nilai_mutu = $this->input->post('nilai_mutu');
		$nilai_lambang = $this->input->post('nilai_lambang');
		$nilai_sks = $this->input->post('nilai_sks');

		$array = array('id_mapel'=>$mapel,'sks'=>$sks,'nilai_mutu'=>$nilai_mutu,'nilai_lambang'=>$nilai_lambang,'nilai_sks'=>$nilai_sks);
		$data = array_merge($array);
		$tambah = $this->m_khs->m_proses_tambah_khs($data);
		if ($tambah > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil ! </strong> <span>Tambah KHS </span></div>');
			return redirect('khs');
		}else{
			
		}
	}else{
		$this->session->set_flashdata('gagal','<div class="alert alert-warning" role="alert"> <span>Semua Form Harus diisi </span></div>');
		return redirect('khs/tambah_khs');
	}
	}
	public function edit_khs($id){
		$data['mapel'] = $this->m_khs->m_mapel();
		$data['tampil'] = $this->m_khs->m_edit_khs($id);
		$this->template->render('khs/v_edit_khs',$data);
	}
	public function proses_edit_khs($id){
		$this->form_validation->set_rules('mapel','Mata Kuliah',  'trim|required');
		$this->form_validation->set_rules( 'sks','SKS', 'trim|required');
		$this->form_validation->set_rules( 'nilai_mutu','Nilai Mutu', 'trim|required');
		$this->form_validation->set_rules( 'nilai_lambang','Nilai Lambang', 'trim|required');
		$this->form_validation->set_rules( 'nilai_sks','Nilai SKS', 'trim|required');
		if ($this->form_validation->run()) {
			# code...
		

		$mapel = $this->input->post('mapel');
		$sks = $this->input->post('sks');
		$nilai_mutu = $this->input->post('nilai_mutu');
		$nilai_lambang = $this->input->post('nilai_lambang');
		$nilai_sks = $this->input->post('nilai_sks');

		$array = array('id_mapel'=>$mapel,'sks'=>$sks,'nilai_mutu'=>$nilai_mutu,'nilai_lambang'=>$nilai_lambang,'nilai_sks'=>$nilai_sks);
		$data = array_merge($array);
		$tambah = $this->m_khs->m_proses_edit_khs($id,$data);
		if ($tambah > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil ! </strong> <span>Edit KHS </span></div>');
			return redirect('khs');
		}else{
			$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <strong>Gagal ! </strong> <span>Edit KHS </span></div>');
			return redirect('khs/v_edit_khs/'.$id);
		}
	}else{
			$this->session->set_flashdata('empty','<div class="alert alert-warning" role="alert"><span>Semua Form Harus di isi </span></div>');
			return redirect('khs/edit_khs/'.$id);
		}
}
public function hapus_khs(){
	$id_khs = $this->input->post('id_khs');

		$response = array();
		if($id_khs) {
			$delete = $this->m_khs->m_hapus_khs($id_khs);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus data Krs</span></div>
');	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Gagal";
			}
		}
		else {
			$response['success'] = false;
			redirect('khs');
		}

		echo json_encode($response);
	}

	public function fetchKhsDataById($id) 
	{
		if($id) {
			$data = $this->m_khs->getKhsData($id);
			echo json_encode($data);
		}

		return false;
	}
	public function cetak_khs(){
		$kelas = "0";
		$mahasiswa = "0";
		$kelas1 = $this->input->post('kelas');
		$mahasiswa2 = $this->input->post('mahasiswa');
		if ($kelas AND $mahasiswa) {
		
		$data['kelas'] = $this->m_khs->m_get_kelas();
		$data['mahasiswa'] = $this->m_khs->m_get_mahasiswa();
		$data['tampil'] = $this->m_khs->m_filter($mahasiswa1);
		}else{
			$data['kelas'] = $this->m_khs->m_get_kelas();
		$data['mahasiswa'] = $this->m_khs->m_get_mahasiswa();
		$data['tampil'] = $this->m_khs->m_filter($mahasiswa);
		}

		
		$this->template->render('khs/v_cetak_khs',$data);
	}
	

}

/* End of file Khs.php */
/* Location: ./application/modules/khs/controllers/Khs.php */
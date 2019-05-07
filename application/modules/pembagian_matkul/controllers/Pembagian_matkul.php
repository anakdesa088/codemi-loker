<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembagian_matkul extends Manajemen_only {
	var $data = array();
	public function __construct(){
		parent::__construct();
		$this->load->model('pembagian_matkul/m_pembagian_matkul');
		$this->not_logged_in();
		$this->sesi_mahasiswa();
	}
	public function index()
	{
	
	
	$data['kelas']	 = $this->m_pembagian_matkul->m_kelas();
	$data['mapel'] = $this->m_pembagian_matkul->m_mapel();
	$data['tampil'] = $this->m_pembagian_matkul->m_tampil();
	$this->template->render('pembagian_matkul/v_pembagian_matkul',$data);
	}
	public function filter($kelas){
	$data['kelas']	 = $this->m_pembagian_matkul->m_kelas();
	$data['mapel'] = $this->m_pembagian_matkul->m_mapel();
	$data['tampil'] = $this->m_pembagian_matkul->m_filter($kelas);
	$data['judul_kelas'] = $this->m_pembagian_matkul->m_judul_kelas($kelas);
	$this->template->render('pembagian_matkul/v_filter',$data);
	}

	public function add(){
		$mapel = $this->input->post('mapel');
		$kelas = $this->input->post('kelas');
		$data = $this->m_pembagian_matkul->m_cek($kelas,$mapel);
		if ($data) {
			$this->session->set_flashdata('sudah_ada','<div class="alert alert-danger" role="alert"> <strong>GAGAL</strong> <span> Maaf data sudah di input</span></div>');
			redirect('pembagian_matkul');
		}else{
			$array = array('id_mapel'=>$mapel,'id_kelas'=>$kelas);
		$rekasi = array_merge($array);
		$tambah = $this->m_pembagian_matkul->m_add($rekasi);
		if ($tambah > 0) {
			$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menambah </span></div>');
		redirect('pembagian_matkul');

		}else{
			echo "gagal";
	}
		}
		
	}
	public function insert()
	{
		
		$validation = array(
				array('field' => 'data_kelas[]', 'rules' => 'required'),
				array('field' => 'data_mapel[]', 'rules' => 'required')
				
		);

		$this->form_validation->set_rules($validation);
		if ($this->form_validation->run() == true) {
			$data_kelas = $this->input->post('data_kelas');
			$data_mapel = $this->input->post('data_mapel');
			
			
			

			
		$value = array();
		for ($i=0; $i < count($data_kelas); $i++) { 
			$value[$i] = array(
				'id_kelas' =>$data_kelas[$i],
				'id_mapel' =>$data_mapel[$i]
			);
		
		}
		$this->db->insert_batch('pembagian_matkul',$value);
		//	foreach ($data_kelas as $key) {
		//		array_push($value, array(
		//			'id_kelas' => $key,
					
			
		//		));
		//	}
		
		}

		
	}
	public function hapus($id){
		$hapus = $this->m_pembagian_matkul->m_hapus($id);
		if ($hapus > 0 ) {
			redirect('pembagian_matkul');
		}else{
			redirect('pembagian_matkul');
		}
	}
	public function tampil(){
		$data['kelas']  = $this->m_pembagian_matkul->m_kelas();
		$data['mapel'] = $this->m_pembagian_matkul->m_mapel();
		$data['tampil'] = $this->m_pembagian_matkul->m_tampil();
		$this->template->render('pembagian_matkul/v_tampil',$data);
	}

}

/* End of file Pembagian_matkul.php */
/* Location: ./application/modules/pembagian_matkul/controllers/Pembagian_matkul.php */
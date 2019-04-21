<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khs extends Manajemen_only {

	public function __construct(){

		parent::__construct();
		$this->load->model('m_khs');
				$this->load->library('form_validation');
	}
	public function index(){
			$nim = $this->input->post('nim');

		$cek = $this->m_khs->m_cek_kelas($nim);
		foreach ($cek as $r) {
			$kelas = $r->id_kelas;
		}
		//$data['khs'] = $this->m_khs->m_data_khs($kelas);
		$data['tampil'] = $this->m_khs->m_tampil($kelas);
		$data['mahasiswa'] = $this->m_khs->m_mahasiswa($nim);
		$this->template->render('khs/v_khs',$data);


	}
	public function find(){
		$nim = $this->input->post('nim');

		$cek = $this->m_khs->m_cek_kelas($nim);
		foreach ($cek as $r) {
			$kelas = $r->id_kelas;
		}
		$data['tampil'] = $this->m_khs->m_tampil($kelas);
		$data['mahasiswa'] = $this->m_khs->m_mahasiswa($nim);
		$this->template->render('khs/v_khs',$data);

	}
	public function proses_tambah_khs(){
		$validation = array(
				array('field' => 'data_mahasiswa[]', 'rules' => 'required'),
				array('field' => 'data_mapel[]', 'rules' => 'required'),
				array('field' => 'data_sks[]', 'rules' => 'required'),
				array('field' => 'data_nilai_mutu[]', 'rules' => 'required'),
				array('field' => 'data_nilai_lambang[]', 'rules' => 'required'),
				array('field' => 'data_nilai_sks[]', 'rules' => 'required'),
				
				
		);

		$this->form_validation->set_rules($validation);
		if ($this->form_validation->run() == true) {
			$data_mahasiswa = $this->input->post('data_mahasiswa[]');
			$data_mapel = $this->input->post('data_mapel[]');
			$data_sks = $this->input->post('data_sks[]');
			$data_nilai_mutu = $this->input->post('data_nilai_mutu[]');
			$data_nilai_lambang = $this->input->post('data_nilai_lambang[]');
			$data_nilai_sks = $this->input->post('data_nilai_sks[]');
			
			
			

			
		$value = array();
		for ($i=0; $i < count($data_mapel); $i++) { 
			$value[$i] = array(
				'id_mapel' =>$data_mapel[$i],
				'id_mahasiswa' =>$data_mahasiswa[$i],
				'sks' =>$data_sks[$i],
				'nilai_mutu' =>$data_nilai_mutu[$i],
				'nilai_lambang' =>$data_nilai_lambang[$i],
				'nilai_sks' =>$data_nilai_sks[$i]

			);
		
		}
		
		$this->db->insert_batch('khs',$value);
	}else{
		echo "salah in";
	}
}


}
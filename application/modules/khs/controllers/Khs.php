<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Khs extends Manajemen_only {

	public function __construct(){

		parent::__construct();
		$this->load->model('m_khs');
		$this->load->library('form_validation');
		$this->not_logged_in();
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
		$nim = $this->input->post('nim');
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

			$tambah = $this->db->insert_batch('khs',$value);
			if ($tambah > 0) {
				redirect('khs/datakhs/'.$nim);
				
			}else{
				echo "gagal";
			}

		}else{
		//untuk validasi
		}

	}
	public function datakhs($nim){
			
		$data['tampil'] = $this->m_khs->m_data_khs($nim);
		$data['mahasiswa'] = $this->m_khs->m_mahasiswa($nim);
		$this->template->render('khs/v_data_khs',$data);
	}

	public function data_khs(){
		$nim = $this->input->post('nim');
		$data['tampil'] = $this->m_khs->m_data_khs($nim);
		$data['mahasiswa'] = $this->m_khs->m_mahasiswa($nim);
		$this->template->render('khs/v_data_khs',$data);
	}
	public function hapus_khs($id){
		$pisah = explode("-", $id);

		
		$hapus = $this->m_khs->m_hapus_khs($pisah[0]);
		if ($hapus  > 0) {
			redirect('khs/data_khs/'.$pisah[1]);
	}
	}
	public function cetak_khs(){
		$nim = $this->input->post('nim');
		$data['tampil'] = $this->m_khs->m_data_khs($nim);
		$data['mahasiswa'] = $this->m_khs->m_mahasiswa($nim);
		
		$this->template->render('khs/v_cetak',$data);
	}
	public function proses_cetak_khs($nim){
	
		$data['tampil'] = $this->m_khs->m_data_khs($nim);
		$data['mahasiswa'] = $this->m_khs->m_mahasiswa($nim);
		$this->load->library('mypdf');
    	$this->mypdf->generate('khs/v_template',$data);
		//$this->template->render('khs/v_cetak',$data);
	}
	public function input(){
		$data['mapel'] = $this->m_khs->m_mapel();
		$data['kelas'] = $this->m_khs->m_kelas();
		$this->template->render('khs/v_input_khs',$data);
	}
	public function filter(){
		$data['mapel'] = $this->m_khs->m_mapel();
		$data['kelas'] = $this->m_khs->m_kelas();
		$kelas = $this->input->post('kelas');
		$mapel = $this->input->post('mapel');
		$data['data_mapal'] = $this->m_khs->m_cek_mapel($mapel);
		$data['mahasiswa'] = $this->m_khs->m_filter($kelas);
		$this->template->render('khs/v_filter_khs',$data);
	}
	public function proses_input(){




		$id_mahasiswa= $this->input->post('id_mahasiswa');
		$validation = array(
			array('field' => 'uts[]', 'rules' => 'required'),
			array('field' => 'uts40[]', 'rules' => 'required'),
			array('field' => 'uas[]', 'rules' => 'required'),
			array('field' => 'uas40[]', 'rules' => 'required'),
			array('field' => 'tugas[]', 'rules' => 'required'),
			array('field' => 'tugas20[]', 'rules' => 'required'),
			array('field' => 'jumlah[]', 'rules' => 'required'),
			array('field' => 'am[]', 'rules' => 'required'),
			array('field' => 'hm[]', 'rules' => 'required'),
			array('field' => 'keterangan[]', 'rules' => 'required'),
			array('field' => 'id_dosen[]', 'rules' => 'required'),
			array('field' => 'id_mapel[]', 'rules' => 'required'),
			array('field' => 'id_mahasiswa[]', 'rules' => 'required'),


		);

		$this->form_validation->set_rules($validation);
		if ($this->form_validation->run() == true) {
			$uts = $this->input->post('uts[]');
			$uts40 = $this->input->post('uts40[]');
			$uas = $this->input->post('uas[]');
			$uas40 = $this->input->post('uas40[]');
			$tugas = $this->input->post('tugas[]');
			$tugas20 = $this->input->post('tugas20[]');
			$jumlah = $this->input->post('jumlah[]');
			$am = $this->input->post('am[]');
			$hm = $this->input->post('hm[]');
			$keterangan = $this->input->post('keterangan[]');
			$id_dosen = $this->input->post('id_dosen[]');
			$id_mapel = $this->input->post('id_mapel[]');
			$id_mahasiswa = $this->input->post('id_mahasiswa[]');
			
			
			

			
			$value = array();
			for ($i=0; $i < count($id_mahasiswa); $i++) { 
				$value[$i] = array(
					'uts' =>$uts[$i],
					'uts40' =>$uts40[$i],
					'uas' =>$uas[$i],
					'uas40' =>$uas40[$i],
					'tugas' =>$tugas[$i],
					'tugas20' =>$tugas20[$i],
					'jumlah' =>$jumlah[$i],
					'am' =>$am[$i],
					'hm' =>$hm[$i],
					'keterangan' =>$keterangan[$i],
					'id_dosen' =>$id_dosen[$i],
					'id_mapel' =>$id_mapel[$i],
					'id_mahasiswa' =>$id_mahasiswa[$i]

				);

			}

			$tambah = $this->db->insert_batch('nilai_uas',$value);
			if ($tambah > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong></strong> <span>Berhasil Menambah KHS </span></div>
');	
				redirect('khs/list_khs','refresh');
			}else{
				echo "gagal";
			}

		}else{
		//untuk validasi
		}
	}
	public function list_khs(){
		$id_dosen = $this->session->userdata('id_dosen');
		
		$data['kelas'] = $this->m_khs->m_kelas();
		$data['mapel'] = $this->m_khs->m_mapel();
		//$data['tampil'] = $this->m_khs->m_khs_dosen($id_dosen);
		$this->template->render('khs/v_khs_dosen',$data);
	}
	public function list_khs_kelas(){
		$id_dosen = $this->session->userdata('id_dosen');
		
		$data['mapel'] = $this->m_khs->m_mapel();
		$data['kelas'] = $this->m_khs->m_kelas();
		$kelas = $this->input->post('kelas');
		$mapel = $this->input->post('mapel');
		$cek = $this->m_khs->m_khs_dosen($kelas,$mapel);
		
		foreach ($cek as $r) {
			$id_kelas = $r->id_kelas;
			$id_mapel = $r->id_mapel;
		}
		if (isset($id_kelas)) {
			$data['kelas_mhs'] = $this->m_khs->m_cek_kelas_mhs($id_kelas);
		}else{

		}
		
		if (isset($id_mapel)) {
			$s = $this->m_khs->m_cek_matkul_mhs($id_mapel);
			$data['mapeli'] = $s->nama_mapel;
		}else{

		}
		

		
		//$data['data_mapal'] = $this->m_khs->m_cek_mapel($mapel);
		$data['tampil'] = $this->m_khs->m_khs_dosen($kelas,$mapel);
		
		$this->template->render('khs/v_khs_kelas',$data);
	}
	public function mhs(){
		$id_mahasiswa = $this->session->userdata('id_mahasiswa');
		$data['mahasiswa'] = $this->m_khs->m_info_mhs($id_mahasiswa);
		$data['tampil'] = $this->m_khs->m_khs_mhs($id_mahasiswa);
		$this->template->render('khs/v_khs_mhs',$data);
	}


}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends Manajemen_only {

	 
	public function __construct(){
		parent::__construct();
		$this->load->model('pengumuman/m_pengumuman');
		$this->not_logged_in();
	}
	public function index()
	{
		$data['tampil'] = $this->m_pengumuman->m_data_pengumuman();
		$data['email'] = $this->m_pengumuman->m_email_pmb();
		$this->template->render('pengumuman/v_pengumuman',$data);
	}
	public function tambah_pengumuman(){
		$data['email'] = $this->m_pengumuman->m_email_pmb();
		$this->template->render('pengumuman/v_tambah_pengumuman',$data);
	}
	public function proses_tambah_pengumuman(){
		$judul = $this->input->post('judul');
		$kepada = $this->input->post('kepada');
		$pesan = $this->input->post('pesan');
		$read = "0";
		$tanggal_kirim = date("Y-m-d"); 



$array = array('judul'=>$judul,'id_pmb'=>$kepada,'pesan'=>$pesan,'tanggal_kirim'=>$tanggal_kirim,'read'=>$read);
		$relasi = array_merge($array);
		$data = $this->m_pengumuman->m_proses_tambah_pengumuman($relasi);
		if ($data > 0) {
			$this->session->set_flashdata('berhasil','berhasil');
			redirect('pengumuman');
		}else{
			redirect('pengumuman');
		}


	}
	public function hapus_pengumuman($id)
	{
		$hapus = $this->m_pengumuman->m_hapus_pengumuman($id);
		if ($hapus > 0) {
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert"> <span>Berhasil Menghapus Pengumuman</span></div>
');
			redirect('pengumuman');
		}
	}
	public function mahasiswa(){
		$data['tampil'] = $this->m_pengumuman->m_data_pengumuman_mhs();
		$data['email'] = $this->m_pengumuman->m_email_mhs();
		$this->template->render('pengumuman/v_pengumuman_mhs',$data);
	}
	public function tambah_pengumuman_mhs(){
		$data['email'] = $this->m_pengumuman->m_email_mhs();
		$this->template->render('pengumuman/v_tambah_pengumuman_mhs',$data);
	}
	public function proses_tambah_pengumuman_mhs(){
		$judul = $this->input->post('judul');

		$kepada = $this->input->post('kepada');
		$pesan = $this->input->post('pesan');
		$read = "0";
		$tanggal_kirim = date("Y-m-d"); 

		if ($this->session->userdata('management')) {
			$dari = $this->session->userdata('username');
		}
		if ($this->session->userdata('dosen')) {
			$dari = $this->session->userdata('nama_dosen');
		}



$array = array('judul'=>$judul,'id_mahasiswa'=>$kepada,'dari'=>$dari,'pesan'=>$pesan,'tanggal_kirim'=>$tanggal_kirim,'read'=>$read);
		$relasi = array_merge($array);
		$data = $this->m_pengumuman->m_proses_tambah_pengumuman_mhs($relasi);
		if ($data > 0) {
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert"> <span>Berhasil Menambah Pengumuman</span></div>');
			redirect('pengumuman/mahasiswa');
		}else{
			redirect('pengumuman/mahasiswa');
		}


	}
	public function hapus_pengumuman_mhs($id)
	{
		$hapus = $this->m_pengumuman->m_hapus_pengumuman_mhs($id);
		if ($hapus > 0) {
			$this->session->set_flashdata('sukses', '<div class="alert alert-success" role="alert"> <span>Berhasil Menghapus Pengumuman</span></div>
');
			redirect('pengumuman/mahasiswa');
		}
	}
	public function list_pengumuman_mhs(){
		$id = $this->session->userdata('id_mahasiswa');
	    $data['info'] = $this->m_pengumuman->m_all_data_info_mhs($id);
	    $this->template->render('pengumuman/v_list_pengumuman',$data);
	}
	public function view_pengumuman_mhs($info){
		$id = $this->session->userdata('id_mahasiswa');
  		$read = "1";
		  $array = array('read'=>$read);


		  $this->m_pengumuman->m_read_mhs($info,$array);
		  //$id = $this->session->userdata('id_pmb');
		  $data['info'] = $this->m_pengumuman->m_view_info_mhs($info);
		  $this->template->render('pengumuman/v_view_pengumuman_mhs',$data);

	}
	public function dosen(){
		$id_dosen = $this->session->userdata('id_dosen');
		$data['tampil'] = $this->m_pengumuman->m_data_pengumuman_dosen($id_dosen);
		
		$this->template->render('pengumuman/v_pengumuman_dosen',$data);	
	}
	public function select_kelas()
	{
		$data['kelas'] = $this->m_pengumuman->m_kelas();	
		$this->template->render('pengumuman/v_kelas',$data);
	}
	public function tambah_pengumuman_dosen(){
		$kelas = $this->input->post('kelas');
		$data['mahasiswa'] = $this->m_pengumuman->m_cek_kelas_mhs($kelas);
		$data['kelas'] = $this->m_pengumuman->m_kelas();
		$this->template->render('pengumuman/v_tambah_pengumuman_dosen',$data);
	}
	public function proses_tambah_pengumuman_dosen()
	{
		$kelas = $this->input->post('kelas');
		
		
		$validation = array(
			array('field' => 'pesan[]', 'rules' => 'required'),
			array('field' => 'judul[]', 'rules' => 'required'),
			array('field' => 'tanggal_kirim[]', 'rules' => 'required'),
			array('field' => 'dari[]', 'rules' => 'required'),
			array('field' => 'read[]', 'rules' => 'required'),
			array('field' => 'id_dosen[]', 'rules' => 'required'),
			array('field' => 'kepada[]', 'rules' => 'required'),


		);

		$this->form_validation->set_rules($validation);
		if ($this->form_validation->run() == true) {
			$pesan = $this->input->post('pesan[]');
			$judul = $this->input->post('judul[]');
			$tanggal_kirim = $this->input->post('tanggal_kirim[]');
			$dari = $this->input->post('dari[]');
			$read = $this->input->post('read[]');
			$kepada = $this->input->post('kepada[]');
			$id_dosen = $this->input->post('id_dosen[]');
			
		
			
			
			
			

			
			$value = array();
			for ($i=0; $i < count($kepada); $i++) { 
				$value[$i] = array(
					'pesan' =>$pesan[$i],
					'judul' =>$judul[$i],
					'tanggal_kirim' =>$tanggal_kirim[$i],
					'dari' =>$dari[$i],
					'id_dosen' =>$id_dosen[$i],
					'id_mahasiswa' =>$kepada[$i],


				);

			}


			$tambah = $this->db->insert_batch('pengumuman_dosen',$value);

			

		}

		
	}


}

/* End of file Pengumuman.php */
/* Location: ./application/modules/pengumuman/controllers/Pengumuman.php */
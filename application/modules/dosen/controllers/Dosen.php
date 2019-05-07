<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends Manajemen_only {

	public function __construct(){
		parent::__construct();
		$this->load->model('dosen/m_dosen');
		$this->not_logged_in();
		$this->sesi_mahasiswa();
	}

	public function index()
	{
		$data['tampil'] = $this->m_dosen->m_get_dosen();
		$this->template->render('dosen/v_dosen',$data);
	}
	public function tambah_dosen(){
		$data['kelas'] = $this->m_dosen->m_kelas();
		$this->template->render('dosen/v_tambah_desen',$data);
	}
	public function proses_tambah_dosen(){
		$nama_dosen		= $this->input->post('nama_lengkap');
		$jk				 	= $this->input->post('jk');
		$tmpt_lahir 		= $this->input->post('tmpt_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$alamat 			= $this->input->post('alamat');
		$foto_dosen			= $_FILES['foto_dosen']['name'];
		$email 				= $this->input->post('email');
		$kelas = $this->input->post('kelas');
		$password 			= $this->input->post('password');
		$tahun_masuk  			= $this->input->post('tahun_masuk');
		$config['upload_path'] = './uploads'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 

				$date=date_create($tgl_lahir);
				$tanggal_lahir = date_format($date,"Y-m-d");

		$this->upload->initialize($config);
		if(!empty($foto_dosen)){
			if($this->upload->do_upload('foto_dosen')){
				$gbr = $this->upload->data();
				// compress images
				$config['image_library'] = 'gd2';
				$config['source_image'] = './uploads'.$gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '50%';
				$config['new_image'] = './uploads'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				

				$data = array(
					'nama_dosen'	=>$nama_dosen,
					'jk' 		 	=>$jk,
					'tmpt_lahir'	=>$tmpt_lahir,
					'id_kelas' => $kelas,
					'tgl_lahir'		=>$tanggal_lahir,
					'alamat'		=>$alamat,
					'foto_dosen'	=>$gbr['file_name'],
					'email'			=>$email,
					'password'		=>$password,
					'tahun_masuk'	=>$tahun_masuk
				);
				$relasi = array_merge($data);
				$tambah = $this->m_dosen->m_proses_tambah_dosen($relasi);
				
				if ($tambah > 0) {
					$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menambah Data Dosen</span></div>');
					redirect('dosen');
				}
				
				
				
			}else{
				echo "Gambar tidak boleh kosong";
			}
		}else{
			$date=date_create($tgl_lahir);
				$tanggal_lahir = date_format($date,"Y-m-d");
			$data = array(
				'nama_dosen'	=>$nama_dosen,
				'jk' 		 	=>$jk,
				'tmpt_lahir'	=>$tmpt_lahir,
				'tgl_lahir'		=>$tanggal_lahir,
				'alamat'		=>$alamat,
				'email'			=>$email,
				'id_kelas'      =>$kelas,
				'password'		=>$password,
				'tahun_masuk'	=>$tahun_masuk
			);
			$relasii = array_merge($data);
			$tambah = $this->m_dosen->m_proses_tambah_dosen($relasii);

			if ($tambah > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menambah Data Dosen</span></div>');
				redirect('dosen');
			}
		}
	}

public function edit_dosen($id){
	$id_link = $this->m_dosen->m_cek_id($id);

			# code...
	if($id_link){
	$data['tampil'] = $this->m_dosen->m_edit_dosen($id);
	$this->template->render('dosen/v_edit_dosen',$data);
	}else{
		redirect('dosen');
	}
}
public function proses_edit_dosen($id){
	
		# code...
	$date=date_create($this->input->post('tgl_lahir'));
				$tanggal_lahir = date_format($date,"Y-m-d");
		$nama_dosen		= $this->input->post('nama_lengkap');
		$jk				 	= $this->input->post('jk');
		$tmpt_lahir 		= $this->input->post('tmpt_lahir');
		$tgl_lahir			= $tanggal_lahir;
		$alamat 			= $this->input->post('alamat');
		$foto_dosen			= $_FILES['foto_dosen']['name'];
		$email 				= $this->input->post('email');
		$kelas = $this->input->post('kelas');
		$password 			= $this->input->post('password');
		$tahun_masuk  			= $this->input->post('tahun_masuk');
		$config['upload_path'] = './uploads'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
		$this->upload->initialize($config);
		if(!empty($foto_dosen)){
			if($this->upload->do_upload('foto_dosen')){
				$gbr = $this->upload->data();
				// compress images
				$config['image_library'] = 'gd2';
				$config['source_image'] = './uploads'.$gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '50%';
				$config['new_image'] = './uploads'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				

				$data = array(
					'nama_dosen'	=>$nama_dosen,
					'jk' 		 	=>$jk,
					'tmpt_lahir'	=>$tmpt_lahir,
					'tgl_lahir'		=>$tgl_lahir,
					'alamat'		=>$alamat,
					'id_kelas' => $kelas,
					'foto_dosen'	=>$gbr['file_name'],
					'email'			=>$email,
					'password'		=>$password,
					'tahun_masuk'	=>$tahun_masuk
				);
				$relasi  = array_merge($data);
				$tambah = $this->m_dosen->m_proses_edit_dosen($id,$relasi);
				$foto_lamah = $this->input->post('foto_lamah');
					unlink('uploads/'.$foto_lamah);
				if ($tambah > 0) {
					$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Edit Data Dosen</span></div>');
					redirect('dosen');
				}
				
				
				
			}else{
				echo "Gambar tidak boleh kosong";
			}
		}else{

			$data = array(
				'nama_dosen'	=>$nama_dosen,
				'jk' 		 	=>$jk,
				'tmpt_lahir'	=>$tmpt_lahir,
				'tgl_lahir'		=>$tgl_lahir,
				'alamat'		=>$alamat,
				'id_kelas' =>$kelas,
				'email'			=>$email,
				'password'		=>$password,
				'tahun_masuk'	=>$tahun_masuk
			);

			$relasii = array_merge($data);

			$tambah = $this->m_dosen->m_proses_edit_dosen($id,$relasi);

			if ($tambah > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Edit Data Dosen</span></div>');
				redirect('dosen');
			}
		}
	
}

	public function hapus_dosen(){
	$id_dosen = $this->input->post('id');

		$response = array();
		if($id_dosen) {
			$delete = $this->m_dosen->m_hapus_dosen($id_dosen);
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

	public function fetchDosenDataById($id) 
	{
		if($id) {
			$data = $this->m_dosen->getDosenData($id);
			echo json_encode($data);
		}

		return false;
	}
	public function biodata(){
		$id_dosen = $this->session->userdata('id_dosen');
		$data['tampil'] = $this->m_dosen->m_biodata($id_dosen);
		$this->template->render('dosen/v_biodata_dosen',$data);
	}


}


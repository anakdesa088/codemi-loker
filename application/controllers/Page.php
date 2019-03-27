<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_page');
		$this->load->model('m_tahun_ajaran');
		$this->load->library('akper/auth_akper');
		if (!$this->auth_akper->is_login('udahlogin')) 
		{
			return redirect('auth/login');			
		}

		// Jika manajemen buka fitu ini maka redirect ke backend/dashboard
		if($this->auth_akper->is_login('manajemen'))
		{
			return redirect('backend/dashboard');							
		}
	}

	public function index()
	{
		$php = "apasj.php";
		$cek = strrchr($php,".php");
		echo $cek;
		
		
	}
	public function form(){
		$this->load->view('frontend/pmb/v_pmb');
	}

	public function pmb()
	{
		$id 			= $this->session->userdata('id_pmb');
		$data['tampil'] = $this->m_page->m_get_id($id);
		$data['ta'] 	= $this->m_tahun_ajaran->find($data['tampil']->tahun_ajaran_id_tahun_ajaran);
		$this->load->view('frontend/pmb/v_pmb',$datas);
	}
	public function c_proses_pmb()
	{
		$id 	= $this->session->userdata('id_pmb');	
		$data 	= $this->getFormData();
		$foto_ijaza = $_FILES['foto_ijaza']['name'];
		$foto_kesehatan = $_FILES['foto_kesehatan']['name'];
		$foto = $_FILES['foto']['name'];
		if (empty($foto) || empty($foto_ijaza) || empty($foto_kesehatan)) {
			
			$this->session->set_flashdata('foto','<div class="alert alert-danger">Mohon Diisi semua foto</div>');
					redirect('page/pmb/'.$id);


		/*	$array = array('nama_lengkap'=>$nama_lengkap,'kewarganegaraan'=>$kewarganegaraan,'jk'=>$jk,'tinggi_badan'=>$tinggi_badan,'berat_badan'=>$berat_badan,'tmpt_lahir'=>$tmpt_lahir,'tgl_lahir'=>$tgl_lahir,'alamat'=>$alamat,'kode_pos'=>$kode_pos,'nama_ayah'=>$nama_ayah,'nama_ibu'=>$nama_ibu,'no_hp1'=>$no_hp1,'no_hp2'=>$no_hp2,'info_dari'=>$info_dari,'nama_asal_sekolah'=>$nama_asal_sekolah,'alamat_asal_sekolah'=>$alamat_asal_sekolah); 

			
			$daftar = $this->m_page->m_proses_pmb($id,$array);
			if ($daftar > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success">Berhasil Upload Data !</div>');
				redirect('page/pmb/'.$id);
			}else{
				echo "salah";
			}
			*/
		}else{
			$config['upload_path'] = './uploads'; //path folder gambar
			$config['allowed_types'] = 'gif|jpg|png|jpeg'; //type gambar bisa disesuaikan
			$this->upload->initialize($config);
			$foto_ijaza = $this->upload->do_upload('foto_ijaza');
			$foto_kesehatan = $this->upload->do_upload('foto_kesehatan');
			$foto = $this->upload->do_upload('foto');
			
			if ($foto_kesehatan) {
				$kesehatan = $this->upload->data();

				$config['image_library'] = 'gd2';
				$config['source_image'] = 'uploads/'.$kesehatan['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '50%';
				$config['new_image'] = 'uploads/'.$kesehatan['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$skesehatan = $kesehatan['file_name'];
				
			}
			if ($foto_ijaza) {
				$ijaza = $this->upload->data();

				$config['image_library'] = 'gd2';
				$config['source_image'] = 'uploads/'.$ijaza['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '50%';
				$config['new_image'] = 'uploads/'.$ijaza['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$sijaza = $ijaza['file_name'];
			}
			if($foto) {
				$gambar = $this->upload->data();

				$config['image_library'] = 'gd2';
				$config['source_image'] = 'uploads/'.$gambar['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '50%';
				$config['new_image'] = 'uploads/'.$gambar['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$sgambar= $gambar['file_name'];


			}




			
			







			if (!empty($_FILES['foto_ijaza']['name'])) {
				$ijaza1 = strtolower($_FILES['foto_ijaza']['name']);
			}else{
				$ijaza1 =  $this->input->post('foto_ijaza2');
			}
			if (!empty($_FILES['foto_kesehatan']['name'])) {
				$kesehatan2 = strtolower($_FILES['foto_kesehatan']['name']);	
			}else{
				$kesehatan2 = $this->input->post('foto_kesehatan2');
			}
			if (!empty($_FILES['foto']['name'])) {
				$foto3 = strtolower($_FILES['foto']['name']);	
			}else{
				$foto3 = $this->input->post('foto2');	
			}
			$cek_foto_ijaza = strrchr($ijaza1,".php");
			$cek_foto_kesehatan = strrchr($kesehatan2,".php");
			$cek_foto_foto = strrchr($foto3,".php");
			if ($cek_foto_ijaza AND $cek_foto_kesehatan AND $cek_foto_foto  == ".php") {
				$this->session->set_flashdata('file_gagal','<div class="alert alert-danger">Foto Gagal Upload !</div>');
				redirect('page/pmb/'.$id);
				
			}else{
				


				$data 					= $this->getFormData();
				$data['foto_diri'] 		= $foto3;
				$data['foto_kesehatan'] = $kesehatan2;
				$data['foto_ijazah'] 	= $ijaza1;
				// $array = array('nama_lengkap'=>$nama_lengkap,'kewarganegaraan'=>$kewarganegaraan,'jk'=>$jk,'tinggi_badan'=>$tinggi_badan,'berat_badan'=>$berat_badan,'tmpt_lahir'=>$tmpt_lahir,'tgl_lahir'=>$tgl_lahir,'alamat'=>$alamat,'kode_pos'=>$kode_pos,'nama_ayah'=>$nama_ayah,'nama_ibu'=>$nama_ibu,'no_hp1'=>$no_hp1,'no_hp2'=>$no_hp2,'info_dari'=>$info_dari,'nama_asal_sekolah'=>$nama_asal_sekolah,'alamat_asal_sekolah'=>$alamat_asal_sekolah,'foto_ijaza'=>$ijaza1,'foto_kesehatan'=>$kesehatan2,'foto'=>$foto3); 				
				$daftar = $this->m_page->m_proses_pmb($id,$data);
				


				# code...
				
				if ($daftar > 0) {
					$this->session->set_flashdata('sukses','<div class="alert alert-success">Berhasil Upload Data !</div>');
					redirect('page/pmb/'.$id);
				}else{
					echo "salah";
				}				
			}

		}


	}

	private function getFormData()
	{
		return [
			'nama_lengkap' 			=> $this->input->post('nama_lengkap'),
			'kewarganegaraan' 		=> $this->input->post('kewarganegaraan'),
			'jk' 					=> $this->input->post('jk'),
			'tinggi_badan' 			=> $this->input->post('tinggi_badan'),
			'berat_badan' 			=> $this->input->post('berat_badan'),
			'tmpt_lahir' 			=> $this->input->post('tmpt_lahir'),
			'tgl_lahir' 			=> $this->input->post('tgl_lahir'),
			'alamat' 				=> $this->input->post('alamat'),
			'kode_pos' 				=> $this->input->post('kode_pos'),
			'nama_ayah' 			=> $this->input->post('nama_ayah'),
			'nama_ibu' 				=> $this->input->post('nama_ibu'),
			'no_hp1' 				=> $this->input->post('no_hp1'),
			'no_hp2' 				=> $this->input->post('no_hp2'),
			'info_dari' 			=> $this->input->post('info_dari'),
			'nama_asal_sekolah' 	=> $this->input->post('nama_asal_sekolah'),
			'alamat_asal_sekolah'	=> $this->input->post('alamat_asal_sekolah'),
		];
	}	
}
function pmb_view($id){
	$data['tampil'] = $this->m_page->m_pmb_view($id);
	$this->load->view('frontend/pmb_view',$data);
}
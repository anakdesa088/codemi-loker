<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends MY_Controller {
function __construct(){
		parent::__construct();
		$this->load->model(array('m_mahasiswa','m_kelas','m_tahun_ajaran'));

	}
	
	public function index()
	{
		
		$data['tampil'] = $this->m_mahasiswa->m_get_mahasiswa();
		$this->template->render('mahasiswa/v_mahasiswa',$data);

	}
	public function tambah_mahasiswa(){
		$data['tahun_ajaran'] = $this->m_tahun_ajaran->get_tahun_ajaran();
		$data['kelas'] = $this->m_kelas->m_get_kelas();
		$this->template->render('mahasiswa/v_tambah_mahasiswa',$data);

	}
	public function proses_tambah_mahasiswa(){
		$config['upload_path'] = './uploads'; 
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
$tahun_ajaran = $this->input->post('tahun_ajaran');
$kelas = $this->input->post('kelas');
$nim = $this->input->post('nim');
$nama_lengkap = $this->input->post('nama_lengkap');
$kewarganegaraan = $this->input->post('kewarganegaraan');
$jk = $this->input->post('jk');
$tinggi_badan = $this->input->post('tinggi_badan');
$berat_badan = $this->input->post('berat_badan');
$tmpt_lahir = $this->input->post('tmpt_lahir');
$tgl_lahir = $this->input->post('tgl_lahir');
$email = $this->input->post('email');
$password = $this->input->post('password');
$alamat = $this->input->post('alamat');
$kode_pos = $this->input->post('kode_pos');
$nama_ayah = $this->input->post('nama_ayah');
$nama_ibu = $this->input->post('nama_ibu');
$no_hp1 = $this->input->post('no_hp1');
$no_hp2 = $this->input->post('no_hp2');
$info_dari = $this->input->post('info_dari');
$nama_asal_sekolah = $this->input->post('nama_asal_sekolah');
$alamat_asal_sekolah = $this->input->post('alamat_asal_sekolah');
		$foto_diri = $_FILES['foto_diri']['name'];
		
		if($foto_diri){
			if($this->upload->do_upload('foto_diri')){
				$foto = $this->upload->data();
				// compress image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './uploads'.$foto['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '50%';
				$config['new_image'] = './uploads'.$foto['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data = array(
			'id_tahun_ajaran' 			=> $id_tahun_ajaran,
			'id_kelas' 			=> $kelas,
			'nim' 			=> $nim,
			'nama_lengkap' 			=> $nama_lengkap,
			'kewarganegaraan' 		=> $kewarganegaraan,
			'jk' 					=> $jk,
			'tinggi_badan' 			=> $tinggi_badan,
			'berat_badan' 			=> $berat_badan,
			'tmpt_lahir' 			=> $tmpt_lahir,
			'tgl_lahir' 			=> $tgl_lahir,
			'email'					=> $email,
			'password'					=> $this->get_pw($password),
			'alamat' 				=> $alamat,
			'kode_pos' 				=> $kode_pos,
			'nama_ayah' 			=> $nama_ayah,
			'nama_ibu' 				=> $nama_ibu,
			'foto_diri'   => $foto['file_name'],
			'no_hp1' 				=> $no_hp1,
			'no_hp2' 				=> $no_hp2,
			'info_dari' 			=> $info_dari,
			'nama_asal_sekolah' 	=> $nama_asal_sekolah,
			'tahun_masuk' => "1",
			'alamat_asal_sekolah'	=> $alamat_asal_sekolah
				);
				$array = array_merge($data);
				$tambah = $this->m_mahasiswa->m_proses_tambah_mahasiswa($array);
				if ($tambah > 0) {
				$this->session->set_flashdata('sukses','
				<div class="alert alert-success" role="alert"> <center>Berhasil Tambah Berita</center></div>

				');
				redirect('backend/bahasiswa');
				}else{
				echo "gagal";
				}
		}else{
			echo "foto tidak boleh kosong";
		}

		//$array = array_merge($data);
		//$tambah = $this->m_mahasiswa->m_proses_tambah_mahasiswa($array);
		//if ($tambah > 0) {
		//	echo "sukses";
		//}

	}else{
		echo "apa";
	}
}
	public function edit_mahasiswa(){

	}
	public function proses_edit_mahasiswa(){

	}
	private function getFormData()
	{
		
	}
	public function get_pw($raw_password)
	{
		$this->config->load('setting');
		$prefix = $this->config->item('password_prefix','security');
		$new_pass = sprintf("%s%s",$prefix,$raw_password);
		$hash = password_hash($new_pass,PASSWORD_DEFAULT);
		return $hash;
	}
}



/* End of file Mahasiswa.php */
/* Location: ./application/controllers/backend/Mahasiswa.php */
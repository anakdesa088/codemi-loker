<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends Manajemen_only {
function __construct(){
		parent::__construct();
		$this->load->model(array('mahasiswa/m_mahasiswa','kelas/m_kelas','tahun_ajaran/m_tahun_ajaran'));

	}
private $filename = "import_data";	
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

		$config['upload_path'] = './uploads'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar bisa disesuaikan
		$this->upload->initialize($config);
		if(!empty($_FILES['foto_diri']['name'])){
			if($this->upload->do_upload('foto_diri')){
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
			'id_tahun_ajaran' 		=> $this->input->post('tahun_ajaran'),
			'id_kelas' 				=> $this->input->post('kelas'),
			'nim' 		        	=> $this->input->post('nim'),
			'nama_lengkap' 			=> $this->input->post('nama_lengkap'),
			'kewarganegaraan' 		=> $this->input->post('kewarganegaraan'),
			'jk' 					=> $this->input->post('jk'),
			'tinggi_badan' 			=> $this->input->post('tinggi_badan'),
			'berat_badan' 			=> $this->input->post('berat_badan'),
			'tmpt_lahir' 			=> $this->input->post('tmpt_lahir'),
			'tgl_lahir' 			=> $this->input->post('tgl_lahir'),
			'email'					=> $this->input->post('email'),
			'password'				=> $this->get_pw($this->input->post('password')),
			'alamat' 				=> $this->input->post('alamat'),
			'kode_pos' 				=> $this->input->post('kode_pos'),
			'nama_ayah' 			=> $this->input->post('nama_ayah'),
			'nama_ibu' 				=> $this->input->post('nama_ibu'),
			"foto_diri" => $gbr['file_name'],
			'no_hp1' 				=> $this->input->post('no_hp1'),
			'no_hp2' 				=> $this->input->post('no_hp2'),
			'info_dari' 			=> $this->input->post('info_dari'),
			'nama_asal_sekolah' 	=> $this->input->post('nama_asal_sekolah'),
			'tahun_masuk' => "1",
			'alamat_asal_sekolah'	=> $this->input->post('alamat_asal_sekolah')
				);
				$arr = array_merge($data);
				$tambah = $this->m_mahasiswa->m_proses_tambah_mahasiswa($arr);
				
				if ($tambah > 0) {
					$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menambah Data Mahasiswa</span></div>');
					redirect('mahasiswa');
				}
				
				
				
			}else{
				echo "Image yang diupload kosong..";
			}
		}


	}
	public function edit_mahasiswa($id){
	$id_link = $this->m_mahasiswa->m_cek_id($id);
	if ($id_link){
		
	$data['kelas'] = $this->m_mahasiswa->m_kelas();
	$data['tampil'] = $this->m_mahasiswa->m_edit_mahasiswa($id);
	$this->template->render('mahasiswa/v_edit_mahasiswa',$data);
	}else{
		redirect('mahasiswa');
	}
	}
	public function proses_edit_mahasiswa($id){
		$config['upload_path'] = './uploads'; //path folder gambar
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type gambar bisa disesuaikan
		$this->upload->initialize($config);
		if(!empty($_FILES['foto_diri']['name'])){
			if($this->upload->do_upload('foto_diri')){
				$gbr = $this->upload->data();
				// compress image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './uploads'.$gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '50%';
				$config['new_image'] = './uploads'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				

				$data = array(
			'id_tahun_ajaran' 		=> $this->input->post('tahun_ajaran'),
			'id_kelas' 				=> $this->input->post('kelas'),
			'nim' 		        	=> $this->input->post('nim'),
			'nama_lengkap' 			=> $this->input->post('nama_lengkap'),
			'kewarganegaraan' 		=> $this->input->post('kewarganegaraan'),
			'jk' 					=> $this->input->post('jk'),
			'tinggi_badan' 			=> $this->input->post('tinggi_badan'),
			'berat_badan' 			=> $this->input->post('berat_badan'),
			'tmpt_lahir' 			=> $this->input->post('tmpt_lahir'),
			'tgl_lahir' 			=> $this->input->post('tgl_lahir'),
			'email'					=> $this->input->post('email'),
			'password'				=> $this->get_pw($this->input->post('password')),
			'alamat' 				=> $this->input->post('alamat'),
			'kode_pos' 				=> $this->input->post('kode_pos'),
			'nama_ayah' 			=> $this->input->post('nama_ayah'),
			'nama_ibu' 				=> $this->input->post('nama_ibu'),
			"foto_diri" => $gbr['file_name'],
			'no_hp1' 				=> $this->input->post('no_hp1'),
			'no_hp2' 				=> $this->input->post('no_hp2'),
			'info_dari' 			=> $this->input->post('info_dari'),
			'nama_asal_sekolah' 	=> $this->input->post('nama_asal_sekolah'),
			'tahun_masuk' => "1",
			'alamat_asal_sekolah'	=> $this->input->post('alamat_asal_sekolah')
				);
				$arr = array_merge($data);
				$edit = $this->m_mahasiswa->m_proses_edit_mahasiswa($id,$arr);
				$nama_lengkap = $this->input->post('nama_lengkap');
				if ($edit > 0) {
					$foto_lamah = $this->input->post('foto_lamah');
					unlink('uploads/'.$foto_lamah);
					$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span>Edit data '.$nama_lengkap.'</span></div>');
					redirect('mahasiswa');
				}
				
				
				
			}else{
				echo "Gambar tidak boleh kosong";
			}
		}else{
			$data = array(
			'id_tahun_ajaran' 		=> $this->input->post('tahun_ajaran'),
			'id_kelas' 				=> $this->input->post('kelas'),
			'nim' 		        	=> $this->input->post('nim'),
			'nama_lengkap' 			=> $this->input->post('nama_lengkap'),
			'kewarganegaraan' 		=> $this->input->post('kewarganegaraan'),
			'jk' 					=> $this->input->post('jk'),
			'tinggi_badan' 			=> $this->input->post('tinggi_badan'),
			'berat_badan' 			=> $this->input->post('berat_badan'),
			'tmpt_lahir' 			=> $this->input->post('tmpt_lahir'),
			'tgl_lahir' 			=> $this->input->post('tgl_lahir'),
			'email'					=> $this->input->post('email'),
			'password'				=> $this->get_pw($this->input->post('password')),
			'alamat' 				=> $this->input->post('alamat'),
			'kode_pos' 				=> $this->input->post('kode_pos'),
			'nama_ayah' 			=> $this->input->post('nama_ayah'),
			'nama_ibu' 				=> $this->input->post('nama_ibu'),
			'no_hp1' 				=> $this->input->post('no_hp1'),
			'no_hp2' 				=> $this->input->post('no_hp2'),
			'info_dari' 			=> $this->input->post('info_dari'),
			'nama_asal_sekolah' 	=> $this->input->post('nama_asal_sekolah'),
			'tahun_masuk' => "1",
			'alamat_asal_sekolah'	=> $this->input->post('alamat_asal_sekolah')
				);
			$nama_lengkap = $this->input->post('nama_lengkap');
			$arr = array_merge($data);
			$edit = $this->m_mahasiswa->m_proses_edit_mahasiswa($id,$arr);
			if ($edit > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span>Edit data '.$nama_lengkap.'</span></div>');

				redirect('mahasiswa');
			}
		}

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
	
	public function hapus_mahasiswa(){
	$id_mahasaiswa = $this->input->post('id_mahasaiswa');

		$response = array();
		if($id_mahasaiswa) {
			$delete = $this->m_mahasiswa->m_hapus_mahasiswa($id_mahasaiswa);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus data Kelas</span></div>
');	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Gagal";
			}
		}
		else {
			$response['success'] = false;
			redirect('mahasiswa');
		}

		echo json_encode($response);
	}

	public function fetchMahasiswaDataById($id) 
	{
		if($id) {
			$data = $this->m_mahasiswa->getMahasiswaData($id);
			echo json_encode($data);
		}

		return false;
	}
	public function import(){
		$data = array(); // Buat variabel $data sebagai array
		
		if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
			// lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
			$upload = $this->m_mahasiswa->upload_file($this->filename);
			
			if($upload['result'] == "success"){ // Jika proses upload sukses
				// Load plugin PHPExcel nya
				include APPPATH.'third_party/PHPExcel/PHPExcel.php';
				
				$excelreader = new PHPExcel_Reader_Excel2007();
				$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
				$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
				
				// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
				// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
				$data['sheet'] = $sheet; 
			}else{ // Jika proses upload gagal
				$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
			}
		}
		$this->template->render('mahasiswa/v_import_mahasiswa',$data);
	}

public function proses_import(){
	include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		
		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		
		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		
		$numrow = 1;
		foreach($sheet as $row){
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				// Kita push (add) array data ke variabel data
				array_push($data, array(
'nim' =>$row['A'],
'nama_lengkap' =>$row['B'],
'email' =>$row['C'],
'password' =>$row['D'],
'kewarganegaraan' =>$row['E'],
'jk' =>$row['F'],
'tinggi_badan' =>$row['G'],
'berat_badan' =>$row['H'],
'alamat' =>$row['I'],
'kode_pos' =>$row['J'],
'tmpt_lahir' =>$row['K'],
'tgl_lahir' =>$row['L'],
'nama_ayah' =>$row['M'],
'nama_ibu' =>$row['N'],
'no_hp1' =>$row['O'],
'no_hp2' =>$row['P'],
'info_dari' =>$row['Q'],
'nama_asal_sekolah' =>$row['R'],
'alamat_asal_sekolah' =>$row['S'],
'level' =>$row['T'],
//'id_tahun_ajaran' =>1,
'tahun_masuk' =>$row['V'],
'id_kelas' =>$row['W'],
'id_dosen' =>$row['X'],
'id_semester' =>$row['Y'],					
				));
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}
		
		$this->m_mahasiswa->insert_multiple($data);
		
		redirect("mahasiswa"); 
	}
}


	
	




/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */
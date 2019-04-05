<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends Manajemen_only {

	 
	public function __construct(){
		parent::__construct();
		$this->load->model('pengumuman/m_pengumuman');
	}
	public function index()
	{
		$data['tampil'] = $this->m_pengumuman->m_data_pengumuman();

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
		$tanggal_kirim = date("Y/m/d"); 



$array = array('judul'=>$judul,'kepada'=>$kepada,'pesan'=>$pesan,'tanggal_kirim'=>$tanggal_kirim,'read'=>$read);

		$data = $this->m_pengumuman->m_proses_tambah_pengumuman($array);
		if ($data > 0) {
					
			redirect('pengumuman');
		}else{
			redirect('pengumuman');
		}


	}
	public function hapus_pengumuman($id)
	{
		$hapus = $this->m_pengumuman->m_hapus_pengumuman($id);
		if ($hapus > 0) {
			redirect('pengumuman');
		}
	}

}

/* End of file Pengumuman.php */
/* Location: ./application/modules/pengumuman/controllers/Pengumuman.php */
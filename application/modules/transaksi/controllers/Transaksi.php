<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends Manajemen_only {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_transaksi');
	}
	public function index()
	{
		$data['tampil'] = $this->m_transaksi->m_data_transaksi();
		$this->template->render('transaksi/v_transaksi',$data);
		
	}
	public function tambah_transaksi(){
		$data['jenis_pembayaran'] = $this->m_transaksi->m_jenis_pembayaran();
		$this->template->render('transaksi/v_tambah_transaksi',$data);
	}
	public function mahasiswa(){
		if (isset($_GET['term'])) {
            $result = $this->m_transaksi->m_mahasiswa($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nim;
                echo json_encode($arr_result);
            }
        }
	}
	public function proses_tambah_transaksi(){
		$jp = $this->input->post('jp');
		$nim = $this->input->post('nim');
		$nominal_bayar = $this->input->post('nominal_bayar');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');
		$hutang = $this->input->post('hutang');
		$cek_nim = $this->m_transaksi->m_cek($nim);
		$pembayaran = $this->m_transaksi->m_jp($jp);
		foreach ($pembayaran as $q) {
			$harga = $q->nominal;
		}
		$date=date_create($tanggal);
		$tanggal_transaksi = date_format($date,"Y-m-d");

		
		if ($cek_nim) {
			$mahasiswa = $this->m_transaksi->m_mahasiswa($nim);
			foreach ($mahasiswa as $r) {
				$id = $r->id_mahasiswa;
			}

			
			
			$array = array('id_jp'=>$jp,'id_mahasiswa'=>$id,'nominal_bayar'=>$nominal_bayar,'hutang'=>$hutang,'tanggal_transaksi'=>$tanggal_transaksi,'keterangan'=>$keterangan);
			$relasi = array_merge($array);
			$tambah = $this->m_transaksi->m_tambah_transaksi($relasi);
			if ($tambah > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert">  <span>BERHASIL TAMBAH TRANSAKSI</span></div>
                              
');	
				redirect('transaksi');
			}else{
				echo "gagal";
			}

		}else{
			echo "tidak ada";

		} 

	}
	public function edit_transaksi($id){
		$data['tampil'] = $this->m_transaksi->m_edit_transaksi($id);
		$data['jenis_pembayaran']  = $this->m_transaksi->m_jenis_pembayaran();
		$this->template->render('transaksi/v_edit_transaksi',$data);
	}

	public function proses_edit_transaksi($id_t){
		$jp = $this->input->post('jp');
		$nim = $this->input->post('nim');
		$nominal_bayar = $this->input->post('nominal_bayar');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');
		$hutang = $this->input->post('hutang');
		$cek_nim = $this->m_transaksi->m_cek($nim);
		$pembayaran = $this->m_transaksi->m_jp($jp);
		foreach ($pembayaran as $q) {
			$harga = $q->nominal;
		}

		
		if ($cek_nim) {
			$mahasiswa = $this->m_transaksi->m_mahasiswa($nim);
			foreach ($mahasiswa as $r) {
				$id = $r->id_mahasiswa;
			}

			
			
			$array = array('id_jp'=>$jp,'id_mahasiswa'=>$id,'nominal_bayar'=>$nominal_bayar,'hutang'=>$hutang,'tanggal_transaksi'=>$tanggal,'keterangan'=>$keterangan);
			$relasi = array_merge($array);
			$tambah = $this->m_transaksi->m_edit_transaksi($id_t,$relasi);
			if ($tambah > 0) {
				$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert">  <span>BERHASIL EDIT TRANSAKSI</span></div>
                              
');	
				redirect('transaksi');
			}else{
				echo "gagal";
			}

		}else{
			echo "tidak ada";

		} 

	}
	public function fetchDosenDataById($id) 
	{
		if($id) {
			$data = $this->m_transaksi->getDosenData($id);
			echo json_encode($data);
		}

		return false;
	}
	public function coba(){
		
		$id=$this->input->post('id');
        $data=$this->m_transaksi->m_jps($id);
        echo json_encode($data);
		
	}
	function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->transaksi->m_autocomplite($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nim;
                echo json_encode($arr_result);
            }
        }
    }
    public function hapus_transaksi(){
	$id_transaksi = $this->input->post('id');

		$response = array();
		if($id_transaksi) {
			$delete = $this->m_transaksi->m_hapus_transaksi($id_transaksi);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus data Transaksi</span></div>
');	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Gagal";
			}
		}
		else {
			$response['success'] = false;
			redirect('transaksi');
		}

		echo json_encode($response);
	}

	public function fetchTransaksiDataById($id) 
	{
		if($id) {
			$data = $this->m_transaksi->getTransaksiData($id);
			echo json_encode($data);
		}

		return false;
	}

}

/* End of file Transaksi.php */
/* Location: ./application/modules/transaksi/controllers/Transaksi.php */
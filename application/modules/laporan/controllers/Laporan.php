<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Manajemen_only {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_laporan');
		$this->not_logged_in();
		$this->sesi_mahasiswa();
	}
	public function index()
	{
		
	}
	public function transaksi(){
		$data['kelas'] = $this->m_laporan->m_kelas();
		$this->template->render('laporan/transaksi/v_laporan_transaksi',$data);
	}
	public function laporan_transaksi(){
		$start = $this->input->post('start');
		$end = $this->input->post('end');
				$date_start=date_create($start);
                $tanggal_start = date_format($date_start,"Y-m-d");
              	$date_end = date_create($end);
              	$tanggal_end = date_format($date_end,"Y-m-d");
	    $array = array($tanggal_start,$tanggal_end);
	    
	    $data['tampil'] = $this->m_laporan->m_laporan_transaksi($array);
	    $this->template->render('laporan/transaksi/v_result_transaksi',$data);
	}
	public function laporan_transaksi_status(){
		$start = $this->input->post('start');
		$end = $this->input->post('end');
				$date_start=date_create($start);
                $tanggal_start = date_format($date_start,"Y-m-d");
              	$date_end = date_create($end);
              	$tanggal_end = date_format($date_end,"Y-m-d");
	    $array = array($tanggal_start,$tanggal_end);
	    $status = $this->input->post('status');
	    $data['tampil'] = $this->m_laporan->m_laporan_transaksi_status($array,$status);
	    $this->template->render('laporan/transaksi/v_result_transaksi',$data);
		
	}
	public function laporan_transaksi_kelas(){
		$kelas = $this->input->post('kelas');
	    $data['tampil'] = $this->m_laporan->m_laporan_transaksi_kelas($kelas);
	    $this->template->render('laporan/transaksi/v_result_transaksi',$data);
	}
	public function laporan_piutang(){
		$this->template->render('laporan/piutang/v_laporan_piutang');
	}
	public function laporan_piutang_tanggal(){
		$start = $this->input->post('start');
		$end = $this->input->post('end');
				$date_start=date_create($start);
                $tanggal_start = date_format($date_start,"Y-m-d");
              	$date_end = date_create($end);
              	$tanggal_end = date_format($date_end,"Y-m-d");
	    $array = array($tanggal_start,$tanggal_end);
	    $data['tampil'] = $this->m_laporan->m_piutang_tanggal($array);

	    $this->template->render('laporan/transaksi/v_result_transaksi',$data);

	    
	    
	}
	public function pmb(){
		$data['tahun_ajaran'] = $this->m_laporan->m_tahun_ajaran();
		$data['tampil'] = $this->m_laporan->m_data_pmb();

		$this->template->render('laporan/pmb/v_laporan_pmb',$data);
	}
	public function pmb_filter(){
		$tahun_ajaran = $this->input->post('tahun_ajaran');
		$data['tahun_ajaran'] = $this->m_laporan->m_tahun_ajaran();
		//$data['jumlah'] = $this->m_laporan->m_count_pmb($tahun_ajaran);
		$data['tampil'] = $this->m_laporan->m_pmb_tahun_ajaran($tahun_ajaran);
		$this->template->render('laporan/pmb/v_laporan_pmb_filter',$data);
	}

}

/* End of file Laporan.php */
/* Location: ./application/modules/laporan/controllers/Laporan.php */
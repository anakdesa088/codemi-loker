<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function m_laporan_transaksi($array){
		$this->db->where('tanggal_transaksi BETWEEN "'.$array[0]. '" and "'. $array[1].'"');
	
		$this->db->select('*');
		$this->db->from('transaksi');
        
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
		$this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
		$data = $this->db->get();
		return $data->result();
	}

	public function m_laporan_transaksi_status($array,$status){
		$this->db->where('tanggal_transaksi BETWEEN "'.$array[0]. '" and "'. $array[1].'"');
		$this->db->where('status',$status);
		$this->db->select('*');
		$this->db->from('transaksi');
        
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
		$this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
		$data = $this->db->get();
		return $data->result();
	}
	public function m_laporan_transaksi_kelas($kelas){
		
		$this->db->like('mahasiswa.id_kelas',$kelas);
		$this->db->select('*');
		$this->db->from('transaksi');
        
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
		$this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
		$data = $this->db->get();
		return $data->result();
	}
	public function m_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}

	public function m_piutang_tanggal($array){
		$this->db->where('tanggal_transaksi BETWEEN "'.$array[0]. '" and "'. $array[1].'"');
		
		$this->db->select('*');
		$this->db->from('transaksi');
        
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
		$this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
		$data = $this->db->get();
		return $data->result();
	}
	public function m_data_pmb(){
		$this->db->where('validasi_pembayaran','1');
		$this->db->select('*');
		$this->db->from('pmb');
		$this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran = pmb.id_tahun_ajaran','left');
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_tahun_ajaran(){
		$data = $this->db->get('tahun_ajaran');
		return $data->result();
	}
	public function m_pmb_tahun_ajaran($tahun_ajaran){
		$this->db->where('validasi_pembayaran','1');
		$this->db->where('tahun_ajaran.id_tahun_ajaran',$tahun_ajaran);
		$this->db->select('*');
		$this->db->from('pmb');
		$this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran = pmb.id_tahun_ajaran','left');
		$data = $this->db->get('');
		return $data->result();	
	}
	public function m_count_pmb($tahun_ajaran){
		$this->db->where('id_tahun_ajaran',$tahun_ajaran);
		
		$sql = "SELECT count(id_pmb) as id_pmb from pmb";
        $data = $this->db->query($sql)->row()->id_pmb;
	}
	public function m_count_pmb_ya(){
		
		
	}

	

}

/* End of file M_laporan.php */
/* Location: ./application/modules/laporan/models/M_laporan.php */
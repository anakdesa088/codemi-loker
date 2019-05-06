<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function m_transaksi(){
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
		$this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
		$this->db->order_by('id_transaksi','desc');
		$this->db->limit(4);
		$data = $this->db->get();
		return $data->result();
	}
	public function m_transaksi_mhs($id){
		$this->db->where('mahasiswa.id_mahasiswa',$id);
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
		$this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
		$this->db->order_by('id_transaksi','desc');
		$this->db->limit(4);
		$data = $this->db->get();
		return $data->result();
	}

}

/* End of file m_dashboard.php */
/* Location: ./application/modules/dashboard/models/m_dashboard.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kode_transaksi extends CI_Model {

	public function m_data_transaksi($kode_transaksi){

		$this->db->like('kode_transaksi',$kode_transaksi);
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
		$data = $this->db->get();
		return $data->row();

	}
	public function m_mahasiswa($id_mahasiswa){
		$this->db->where('id_mahasiswa',$id_mahasiswa);

        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->join('kelas','kelas.id_kelas = mahasiswa.id_kelas','left');
        $this->db->join('semester','semester.id_semester = mahasiswa.id_semester','left');
        $this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran = mahasiswa.id_tahun_ajaran','left');
        $data = $this->db->get();
        return $data->row();
	}
	public function m_cek($kode_transaksi){
		$this->db->like('kode_transaksi',$kode_transaksi);
		$data = $this->db->get('transaksi');
		return $data->result();
	}

	

}

/* End of file m_kode_transaksi.php */
/* Location: ./application/modules/kode_transaksi/models/m_kode_transaksi.php */
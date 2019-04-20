<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembagian_matkul extends CI_Model {

	
	public function m_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function m_mapel(){
		$data = $this->db->get('mapel_mahasiswa');
		return $data->result();
	}
	public function m_tampil(){
	
		$this->db->select(['a.id_pembagian_matkul','a.nilai','b.id_kelas','b.nama_kelas','c.id_mapel','c.nama_mapel']);
		$this->db->from('pembagian_matkul a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('mapel_mahasiswa c','c.id_mapel = a.id_mapel','left');
		$data = $this->db->get('');
		return $data->result();
	}
	public function proses_tambah_pembagian_matkul($data){
		$tambah = $this->db->insert('pembagian_matkul',$data);
		return $tambah;
	}
	public function m_add($data){
		$tambah = $this->db->insert('pembagian_matkul',$data);
		return $tambah;
	}
	public function m_hapus($id){
		$this->db->where('id_pembagian_matkul',$id);
		$hapus = $this->db->delete('pembagian_matkul');
		return $hapus;
	}
	public function m_cek($kelas,$mapel){
		//$this->db->where('id_kelas',$kelas,'id_mapel',$mapel);
		
		$this->db->select('id_mapel','id_kelas');
		$this->db->like('id_mapel',$mapel);
		$this->db->like('id_kelas',$kelas);
		$query = $this->db->get('pembagian_matkul');

		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	public function m_judul_kelas($kelas){
		$this->db->where('b.id_kelas',$kelas);
		$this->db->select(['a.id_pembagian_matkul','b.id_kelas','b.nama_kelas','c.id_mapel','c.nama_mapel']);
		$this->db->from('pembagian_matkul a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('mapel_mahasiswa c','c.id_mapel = a.id_mapel','left');
		$data = $this->db->get('');
		return $data->row();
	}
	public function m_filter($kelas){
		$this->db->where('b.id_kelas',$kelas);
		$this->db->select(['a.id_pembagian_matkul','b.id_kelas','b.nama_kelas','c.id_mapel','c.nama_mapel']);
		$this->db->from('pembagian_matkul a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('mapel_mahasiswa c','c.id_mapel = a.id_mapel','left');
		$data = $this->db->get('');
		return $data->result();
	}


}

/* End of file M_pembagian_makul.php */
/* Location: ./application/modules/pembagian_makul/models/M_pembagian_makul.php */
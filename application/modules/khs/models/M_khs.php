<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_khs extends CI_Model {

	

	public function m_cek_kelas($nim){
		
		$this->db->select('nim,id_kelas');
		$this->db->from('mahasiswa');
		$this->db->like('nim',$nim);
		$data = $this->db->get('');
		return $data->result();

	}
	public function m_mahasiswa($nim){
		$this->db->where('nim',$nim);

		//$this->db->where('b.id_mahasiswa',$id_mahasiswa);
		//$this->db->select(['a.id_khs','a.sks','a.nilai_mutu','a.nilai_lambang','a.nilai_sks','b.id_mahasiswa','b.nim','b.tmpt_lahir','b.tgl_lahir','b.id_semester','b.nama_lengkap']);
		//$this->db->from('khs a');
		//$this->db->join('mahasiswa b','b.id_mahasiswa = a.id_mahasiswa','left');
		$data = $this->db->get('mahasiswa');
		
		return $data->row();
	}

public function m_tampil($kelas){
	$this->db->where('b.id_kelas',$kelas);
	$this->db->select(['a.id_pembagian_matkul','b.id_kelas','b.nama_kelas','c.id_mapel','c.nama_mapel']);
	$this->db->from('pembagian_matkul a');
	$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
	$this->db->join('mapel_mahasiswa c','c.id_mapel = a.id_mapel','left');
	$data= $this->db->get('');
	return $data->result();
}
public function m_data_khs($nim){
	$this->db->where('b.nim',$nim);
	$this->db->select(['a.id_khs','a.sks','a.nilai_mutu','a.nilai_lambang','a.nilai_sks','b.id_mahasiswa','b.nim','b.tmpt_lahir','b.tgl_lahir','b.id_semester','b.nama_lengkap','c.id_mapel','c.nama_mapel']);
	$this->db->from('khs a');
	$this->db->join('mahasiswa b','b.id_mahasiswa = a.id_mahasiswa','left');
	$this->db->join('mapel_mahasiswa c','c.id_mapel = a.id_mapel','left');
	$data = $this->db->get('');
	return $data->result();

}
public function m_hapus_khs($id){
	$this->db->where('id_khs',$id);
	$hapus = $this->db->delete('khs');
	return $hapus;
}
}

/* End of file M_khs.php */
/* Location: ./application/modules/khs/models/M_khs.php */
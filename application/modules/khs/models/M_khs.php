<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_khs extends CI_Model {

	public function m_data_khs(){
		$this->db->select(['a.id_khs','a.sks','a.nilai_mutu','a.nilai_lambang','a.nilai_sks','b.id_mapel','b.nama_mapel']);
		$this->db->from('khs a');
		$this->db->join('mapel_mahasiswa b','b.id_mapel = a.id_mapel','left');
		$this->db->order_by('id_khs','asc');
		$data = $this->db->get('');
		return $data->result();

	}
	public function m_mapel(){
		$data = $this->db->get('mapel_mahasiswa');
		return $data->result();
	}
	public function m_proses_tambah_khs($data){
		$data = $this->db->insert('khs',$data);
		return $data;
	}
	public function m_edit_khs($id){
		$this->db->where('id_khs',$id);
		$this->db->select(['a.id_khs','a.sks','a.nilai_mutu','a.nilai_lambang','a.nilai_sks','b.id_mapel','b.nama_mapel']);
		$this->db->from('khs a');
		$this->db->join('mapel_mahasiswa b','b.id_mapel = a.id_mapel','left');
		$data = $this->db->get('');
		return $data->row();
	}
	public function m_proses_edit_khs($id,$data){
		$this->db->where('id_khs',$id);
		$edit = $this->db->update('khs',$data);
		return $edit;
	}
	public function m_hapus_khs($id){
		
			$this->db->where('id_khs', $id);
			$delete = $this->db->delete('khs');
			return ($delete == true) ? true : false;
		
	}
	public function getKhsData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM khs WHERE id_khs = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM khs";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

public function m_get_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function m_get_mahasiswa(){
		$data = $this->db->get('mahasiswa');
		return $data->result();
	}


public function m_filter($mahasiswa){
	$this->db->select(['a.sks','a.nilai_lambang','a.nilai_sks','a.nilai_mutu','a.id_kelas','a.id_khs','b.id_mapel','b.nama_mapel','c.id_mahasiswa','c.nama_lengkap','c.nim','d.id_dosen','d.nama_lengkap']);
	$this->db->from('khs a');
	$this->db->join('mapel_mahasiswa b','b.id_mapel = a.id_mapel','left');
	$this->db->join('mahasiswa c','c.id_mahasiswa = a.id_mahasiswa','left');
	$this->db->join('dosen d','d.id_dosen = a.id_dosen','left');
	
	$this->db->like('c.nim',$mahasiswa);
	//$this->db->like('c.id_mahasiswa',$mahasiswa);
	$data = $this->db->get('');
	return $data->result();
}



/* End of file M_khs.php */
/* Location: ./application/modules/khs/models/M_khs.php */
}
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



}

/* End of file M_khs.php */
/* Location: ./application/modules/khs/models/M_khs.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mapel extends CI_Model {

public function m_getMapel(){
	$data = $this->db->get('mapel_mahasiswa');
	return $data->result();
}
public function m_proses_tambah_mapel($data){
	$tambah = $this->db->insert('mapel_mahasiswa',$data);
	return $tambah;
}
public function m_edit_mapel($id){
	$this->db->where('id_mapel',$id);
	$edit = $this->db->get('mapel_mahasiswa');
	return $edit->row();
}
public function m_cek_id($id){
		$query = $this->db->where('id_mapel', $id)->get('mapel_mahasiswa');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}

public function m_proses_edit_mapel($id,$data){
	$this->db->where('id_mapel',$id);
	$edit = $this->db->update('mapel_mahasiswa',$data);
	return $edit;
}
 
 public function m_hapus_mapel($id){
		
			$this->db->where('id_mapel', $id);
			$delete = $this->db->delete('mapel_mahasiswa');
			return ($delete == true) ? true : false;
		
	}
	public function getMapelData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM mapel_mahasiswa WHERE id_mapel = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM mapel_mahasiswa";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

}


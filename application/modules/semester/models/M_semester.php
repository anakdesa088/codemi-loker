<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_semester extends CI_Model {

	public function m_data_semester(){
		$data = $this->db->get('semester');
		return $data->result();
	}
	public function m_porses_tambah_semester($data){
		$tambah = $this->db->insert('semester',$data);
		return $tambah;
	}
	public function m_edit_semester($id){
		$this->db->where('id_semester',$id);
		$data = $this->db->get('semester');
		return $data->row();
	}
	public function m_porses_edit_semester($id,$data){
		$this->db->where('id_semester',$id);
		$edit = $this->db->update('semester',$data);
		return $edit;
	}
	
	public function m_cek_id($id){
		$query = $this->db->where('id_semester', $id)->get('semester');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	public function m_hapus_semester($id){
		
			$this->db->where('id_semester', $id);
			$delete = $this->db->delete('semester');
			return ($delete == true) ? true : false;
		
	}
	public function getSemesterlData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM semester WHERE id_semester = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM semester";
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}

/* End of file M_semester.php */
/* Location: ./application/modules/semester/models/M_semester.php */
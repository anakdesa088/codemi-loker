<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	public function m_get_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function m_proses_tambah_kelas($data){
		$tambah = $this->db->insert('kelas',$data);
		return $tambah;
	}
	public function m_edit_kelas($id){
		$this->db->where('id_kelas',$id);
		
		$edit = $this->db->get('kelas');
		return $edit->row();
	}
	public function m_proses_edit_kelas($id,$data){
		$this->db->where('id_kelas',$id);
		$edit = $this->db->update('kelas',$data);
		return $edit;
	}
	
	public function m_cek_id($id){
		$query = $this->db->where('id_kelas', $id)->get('kelas');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	public function m_hapus_kelas($id){
		
			$this->db->where('id_kelas', $id);
			$delete = $this->db->delete('kelas');
			return ($delete == true) ? true : false;
		
	}
	public function getKelasData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM kelas WHERE id_kelas = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM kelas";
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}

/* End of file M_kelas.php */
/* Location: ./application/models/M_kelas.php */
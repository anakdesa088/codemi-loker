<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {


	public function m_get_dosen(){
		$this->db->select(['a.id_dosen','a.nama_dosen','a.tmpt_lahir','a.tgl_lahir','a.jk','a.alamat','a.tahun_masuk','b.id_kelas','b.nama_kelas']);
		$this->db->from('dosen a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_proses_tambah_dosen($data){
		$tambah = $this->db->insert('dosen',$data);
		return $tambah;
	}
	public function m_edit_dosen($id){
		$this->db->where('id_dosen',$id);
		$data = $this->db->get('dosen');
		return $data->row();
	}
	public function m_proses_edit_dosen($id,$data){
		$this->db->where('id_dosen',$id);
		$edit = $this->db->update('dosen',$data);
		return $edit;
	}
	public function m_hapus_dosen($id){
		
			$this->db->where('id_dosen', $id);
			$delete = $this->db->delete('dosen');
			return ($delete == true) ? true : false;
		
	}
	public function getDosenData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM dosen WHERE id_dosen = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM dosen";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	public function m_cek_id($id){
		
		$query = $this->db->where('id_dosen', $id)->get('dosen');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}


}

/* End of file M_dosen.php */
/* Location: ./application/models/M_dosen.php */
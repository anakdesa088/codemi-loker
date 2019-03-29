<?php
class M_keuangan extends CI_Model{

	public function m_get_pmb(){

		$data = $this->db->get('pmb');
		return $data->result();
	}
	
	public function m_aktip($id){
		$this->db->where('id_pmb',$id);
		$tampil = $this->db->get('pmb');
		return $tampil->row();
	}
	public function m_delete($id){
		$this->db->where('id_pmb',$id);
		$hapus = $this->db->delete('pmb');
		return $hapus;
	}
	public function m_detail($id){
		$this->db->where('id_pmb',$id);
		$detail = $this->db->get('pmb');
		return $detail->row();
	}
	public function m_status_valid($id,$data){
		$this->db->where('id_pmb',$id);
		$status = $this->db->update('pmb',$data);
		return $data;
	}
	public function m_status_invalid($id,$data){
		$this->db->where('id_pmb',$id);
		$status = $this->db->update('pmb',$data);
		return $data;
	}
	public function m_cek_id($id){
		$query = $this->db->where('id_pmb', $id)->get('pmb');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	public function m_hapus_keuangan($id){
		
			$this->db->where('id_pmb', $id);
			$delete = $this->db->delete('pmb');
			return ($delete == true) ? true : false;
		
	}
	public function getKeuanganData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM pmb WHERE id_pmb = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM pmb";
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}

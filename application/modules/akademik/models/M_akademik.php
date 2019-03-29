<?php
class M_akademik extends CI_Model{

	public function m_get_pmb(){

		$data = $this->db->get('pmb');
		return $data->result();
	}
	public function m_hapus_akademik($id){
		
			$this->db->where('id_pmb', $id);
			$delete = $this->db->delete('pmb');
			return ($delete == true) ? true : false;
		
	}
	public function getAkademikData($id = null)
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
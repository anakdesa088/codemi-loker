<?php
class M_akademik extends CI_Model{

	public function m_get_pmb(){

		$data = $this->db->get('pmb');
		return $data->result();
	}
	
}
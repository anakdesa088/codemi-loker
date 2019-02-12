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
	
}
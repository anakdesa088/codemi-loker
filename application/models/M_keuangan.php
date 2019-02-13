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
}

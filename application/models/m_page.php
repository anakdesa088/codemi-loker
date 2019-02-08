<?php



class M_page extends CI_Model{

	public function m_get_id($id){
		$this->db->where('id_pendaftar',$id);
		$data = $this->db->get('pendaftaran');
		return $data->row();
	}
	public function m_proses_pmb($id,$data){
		$this->db->where('id_pendaftar',$id);
		$daftar = $this->db->update('pendaftaran', $data);
		return $daftar;
	}
	public function m_pmb_view($id){
		$this->db->where('id_pendaftar',$id);
		$tampil = $this->db->get('pendaftaran');
		return $tampil->row();
	}
	
}
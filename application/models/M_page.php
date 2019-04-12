<?php
class M_page extends CI_Model{

	public function m_get_id($id){
		$this->db->where('id_pmb',$id);
		$data = $this->db->get('pmb');
		return $data->row();
	}
	public function m_proses_pmb($id,$data){
		$this->db->where('id_pmb',$id);
		$daftar = $this->db->update('pmb', $data);
		return $daftar;
	}
	public function m_pmb_view($id){
		$this->db->where('id_pmb',$id);
		$tampil = $this->db->get('pmb');
		return $tampil->row();
	}
	public function  m_cek_password($password){
		$this->db->where('password', $password);
		$this->db->select('password');
		$this->db->from('pmb');
		
		
		$query = $this->db->get('');
		if($query->row() > 0)
		{
			return true;
		} else
		{
			return false;
		}

	}
	
}
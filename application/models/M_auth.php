<?php





class M_auth extends CI_Model{
	public function m_proses_daftar($data){
		$daftar = $this->db->insert('pendaftaran', $data);
		return $data;
	}
	public function m_proses_login($email,$password){
	$this->db->where('email',$email);
	$this->db->where('password',$password);
	$login = $this->db->get('pendaftaran');
	return $login->row();	

	}
}
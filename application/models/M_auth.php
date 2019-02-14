<?php
class M_auth extends CI_Model
{
	public function m_proses_daftar($data)
	{
		$daftar = $this->db->insert('pmb', $data);
		return $data;
	}
	public function m_proses_login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$login = $this->db->get('pmb');
		return $login->row();	
	}
	public function m_cek_email($email){
		$this->db->where('email', $email);
		$data = $this->db->get('pmb');
		return $data->result();
	}
	public function m_proses_login_admin($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$login = $this->db->get('user');
		return $login->row();	
	}
}
<?php
class M_auth extends CI_Model
{
	public function m_proses_daftar($data)
	{
		$this->db->trans_start();
		$daftar = $this->db->insert('pmb', $data);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	public function m_proses_login($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$login = $this->db->get('pmb');
		return $login->row();	
	}
	public function m_cek_email($email)
	{
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

	public function is_email_used($email)
	{
		$query = $this->db->where('email', $email)->get('pmb');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
}
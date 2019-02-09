<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Codeigniter Private Auth Library (currently for sisfo_akper)
 * 
 * @package  Codeigniter
 * @author  Nur Muhammad Umar Ihsani <cobaniatbaik@gmail.com>
 */
class Auth
{
	protected $_ci;
	protected $config;

	function __construct($config = ['username' => 'username','password' => 'password'])
	{
		$this->_ci = &get_instance();
		$this->_ci->load->database();

		$this->config = $config;
	}

	public function login($data)
	{
		$user = $this->getUserByUsername($data);
		if ($user && password_verify($data[$this->config['password']],$user->password)) 
		{
			$this->generateSessionLogin($user);
			return true;
		} else
		{
			return false;
		}
	}


	// List of private repositories
	private function generateSessionLogin($user)
	{
		$this->_ci->load->library('session');
		$this->_ci->session->set_userdata('id',$user->id_user);
		$this->_ci->session->set_userdata('username',$user->username);
		$this->_ci->session->set_userdata('level',$user->id_level);
	}
	private function getUserByUsername($data)
	{
		$query = $this->_ci->db->select('*')->from('user')->where([
					$this->config['username'] => $data[$this->config['username']]
				])->get();
		if ($query && $this->_ci->db->affected_rows() > 0) 
		{
			return $query->row();
		} else
		{
			return null;
		}
	}
}
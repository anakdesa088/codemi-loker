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
			$this->_ci->load->library('session');
			$this->generateLoginSession($user);
			$this->generateMenuListSession($user->id_level);
			return true;
		} else
		{
			return false;
		}
	}
	public function is_login()
	{
		return isset($this->_ci->session->userdata('id'))?true:false;
	}

	public function logout($redirectTo = '')
	{
		$this->_ci->session->sess_destroy();
	}



	// List of private methods
	
	
	// Session Generator
	private function generateLoginSession($user)
	{
		$this->_ci->session->set_userdata('id',$user->id_user);
		$this->_ci->session->set_userdata('username',$user->username);
		$this->_ci->session->set_userdata('level',$user->id_level);
	}
	private function generateMenuListSession($level)
	{
		$this->_ci->session->set_userdata('raw_menu',$this->getMenuByLevel($level));
	}


	// Aslinya ini bisa ditaro di model
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
	private function getMenuByLevel($level)
	{
		$query = $this->_ci->db->select('menu.*')->from('menu')
					->join('menu_level','menu.id_menu=menu_level.id_menu','left')
					->where('id_level',$level)
					->get();
		if ($query && $this->_ci->db->affected_rows() > 0) 
		{
			return $query->result();
		} else
		{
			return null;
		}			
	}
	

	public function is_authorized($menuListName)
	{
		if(isset($menuListName[$this->_ci->router->method]) && in_array($menuListName[$this->_ci->router->method],array_column($this->session->raw_menu,'menu_code')))
		{
			return true;
		} else
		{
			return false;
		}
	}
}
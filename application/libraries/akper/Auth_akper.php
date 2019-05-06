<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Codeigniter Private Auth Library (currently for sisfo_akper)
 * 
 * @package  Codeigniter
 * @author  Nur Muhammad Umar Ihsani <cobaniatbaik@gmail.com>
 */
class Auth_akper
{
	protected $_ci;
	protected $config;
	protected $sessionData;
	protected $baseTable = 'user';
	public function __construct($config = ['username' => 'username','password' => 'password'])
	{
		$this->_ci =& get_instance();
		$this->_ci->load->library('session');
		$this->_ci->load->database();

		$this->config = $config;
	}

	public function login($data)
	{
		$user = $this->getUserByUsername($data);
		if ($user && password_verify($data[$this->config['password']],$user->password)) 
		{
			// $this->_ci->load->library('session');
			$this->generateLoginSession($user);
			// $this->generateMenuListSession($user->id_level);
			// return true;
			return $this->sessionData;
		} else
		{
			return false;
		}
	}
	public function is_login($checker = 'id')
	{
		return $this->_ci->session->userdata($checker)?true:false;
	}
	public function logout($redirectTo = '')
	{
		$this->_ci->session->sess_destroy();
	}



	// List Of Setter Method
	public function setSessionData($format)
	{
		$this->sessionData = $format;
	}

	// List of private methods
	
	
	// Session Generator
	private function generateLoginSession($user)
	{
		foreach ($this->sessionData as $key => $value) 
		{
			if (is_string($value)) 
			{
				if (isset($user->$value)) 
				{
					$value = $user->$value;
				}
			}
			$this->_ci->session->set_userdata($key,$value);
		}
	}
	private function generateMenuListSession($level)
	{
		$this->_ci->session->set_userdata('raw_menu',$this->getMenuByRole($level));
	}

	public function setBaseTable($table)
	{
		$this->baseTable = $table;
	}
	public function getRoleByUser($user_id)
	{
		$query = $this->db->select('id_role')->from('role_has_user')->where('id_user',$user_id)->get();
		return $query->result();
	}
	// Aslinya ini bisa ditaro di model
	private function getUserByUsername($data)
	{
		$query = $this->_ci->db->select('*')->from($this->baseTable)->where([
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
	private function getMenuByRole($role)
	{
		$query = $this->_ci->db->select('menu.*')->from('menu_has_role mhr')
					->join('menu','mhr.id_menu=menu.id_menu','left')
					->where_in('id_role',$role)
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
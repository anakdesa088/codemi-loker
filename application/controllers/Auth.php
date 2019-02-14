<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string');
		$this->load->model('m_auth');	
		$this->load->library(array('session','form_validation', 'Recaptcha'));
	}
	
	public function daftar()
	{	
		return $this->load->view('frontend/auth/v_daftar');
	}

	public function c_proses_daftar()
	{
		$email 			= $this->input->post('email', true);
		$password 		= $this->random_password();
		$email_is_used 	= $this->m_auth->is_email_used($email);
		if ($email_is_used) 
		{
			$this->session->set_flashdata('email_sudah_ada','<div class="alert alert-warning" role="alert">
				                         Email '.$email.' Sudah Terdaftar
				                       </div>');
		} else 
		{
			$data 	= array(
				'email' 	=> $email, 
				'password' 	=> $password
			);
			$daftar = $this->m_auth->m_proses_daftar($data);
			if ($daftar) 
			{
				$this->session->set_flashdata('berhasil','<div class="alert alert-success" role="alert">
						Success  Password anda adalah <br><center>'.$password.'</center>
				        </div>
					');
			}
		}
		return redirect('auth/daftar');			
	}
	public function login()
	{
		return $this->load->view('frontend/auth/v_login');
	}
	public function c_proses_login()
	{
		$email 		= $this->input->post('email', true);
		$spassword 	= $this->input->post('password', true);
		$password 	= $this->hash_password($spassword);
		$user 		= $this->m_auth->m_proses_login($email, $password);
		if ($user) 
		{
			$session_data = array(
				'udahlogin'		=> true,
				'nama_lengkap'	=> $user->nama_lengkap,
				'email'			=> $user->email,
				'level'			=> $user->level,
				'id_pmb' 		=> $user->id_pmb,
				'email' 		=> $user->email,
				'status' 		=> 'login'
			);
			$this->session->set_userdata($session_data);
			if ($user->level == 'pmb_baru') 
			{
				return redirect('page/pmb/'.$user->id_pmb);
			} elseif ($user->level == 'pmb_lamah') 
			{
				return redirect('backend/mahasiswa/index/'.$user->id_pmb);
			}
		} else {
			$this->session->set_flashdata('gagal','
				<div class="alert alert-danger" role="alert">
                         Maaf Email atau Password anda Salah !
                       </div>
				');
			return redirect('auth/login');
		}
	}

	public function c_keluar()
	{
		$this->session->sess_destroy();
		return redirect('auth/login');
	}


	// Method untuk generate random password
	private function random_password($length = 8)
	{
		return random_string('basic',$length);
	}
	// Logika untuk ngehash password
	private function hash_password($raw_password)
	{
		return $raw_password;
	}
}

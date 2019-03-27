<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('string','form');
		$this->load->model('m_auth');	
		$this->load->library(array('session','form_validation', 'Recaptcha'));

		/* 
		* Load library akper/auth_akper
		* param pertama (string): nama library
		* param kedua (array): [
			'username' => field username, bisa diganti email, atau apapun yg sifat kolom nya unique, nanti di input harus di isi sama dengan ini
			'password' => sama kaya username
		];
		* note: param 'username' dan 'password' bersifat wajib!!
		* other note: param kedua tidak usah diisi ketika param nya username dan password nya juga password
		*/
		$this->load->library('akper/auth_akper',[
			'username' => 'email',
			'password' => 'password'
		]);

		// Menentukan Base Table (untuk nyari data nya)
		$this->auth_akper->setBaseTable('pmb');
		// Session yang dibuat setelah 'auth' berhasil,
		// Formatnya: 
		// 		key 	=> nama session key nya
		// 		value 	=> ketika valuenya string, dia akan ngecek ke database sesuai nama, jika ditemukan dia akan mereturn nilai dari database, jika tidak ada akan mereturn string value nya 
		$this->auth_akper->setSessionData([
			'udahlogin' 	=> true,
			'nama_lengkap'	=> 'nama_lengkap',
			'email'			=> 'email',
			'level'			=> 'level',
			'id_pmb' 		=> 'id_pmb',
			'status' 		=> 'login',
			'is_pmb'		=> true
		]);
	}
	
	public function daftar()
	{	
		return $this->load->view('frontend/auth/v_daftar');
	}

	public function c_proses_daftar()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');

		$email 			= $this->input->post('email', true);
		$password 		= $this->random_password();
		$email_is_used 	= $this->m_auth->is_email_used($email);
		if ($this->form_validation->run() == TRUE){
			if ($email_is_used) 
		{
			$this->session->set_flashdata('email_sudah_ada','<div class="alert alert-warning text-center" role="alert">
				                         Maaf . Email '.$email.' Sudah Terdaftar
				                       </div>');
		} else 
		{
			$data 	= array(
				'email' 		=> $email, 
				'password' 		=> $this->hash_password($password),
				'tahun_ajaran_id_tahun_ajaran' 	=> '1'
			);
			$daftar = $this->m_auth->m_proses_daftar($data);
			if ($daftar) 
			{
				$this->session->set_flashdata('berhasil','<div class="alert alert-success text-center" role="alert">
						Success  Password anda adalah <br><center>'.$password.'</center>
				        </div>
					');
			}
		}
		return redirect('auth/daftar');	
		
	}else{
		$this->session->set_flashdata('email_sudah_ada','<div class="alert alert-warning text-center" role="alert">
				                         Maaf form email Harus di isi
				                       </div>');
		return redirect('auth/daftar');	
	}

	}
	public function login()
	{
		return $this->load->view('frontend/auth/v_login');
	}
	public function c_proses_login()
	{
		$data = [
			'email' 	=> $this->input->post('email'),
			'password'	=> $this->getPasswordWithPrefix($this->input->post('password'))
		];
		$login = $this->auth_akper->login($data);
		if ($login) 
		{
			if ($this->session->level == 'pmb_baru') 
			{
				return redirect('page/pmb');
			} elseif ($this->session->level == 'pmb_lamah') 
			{
				return redirect('backend/mahasiswa/index/'.$this->session->id_pmb);
			}
		} else 
		{
			$this->session->set_flashdata('gagal','
				<div class="alert alert-danger" role="alert">
                         Maaf  Email atau Password anda Salah !
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
		$this->config->load('setting');
		$prefix = $this->config->item('password_prefix','security');
		$new_pass = sprintf("%s%s",$prefix,$raw_password);
		$hash = password_hash($new_pass,PASSWORD_DEFAULT);
		return $hash;
	}
	private function getPasswordWithPrefix($raw_password)
	{
		$this->config->load('setting');
		$prefix = $this->config->item('password_prefix','security');
		$new_pass = sprintf("%s%s",$prefix,$raw_password);
		return $new_pass;
	}

}

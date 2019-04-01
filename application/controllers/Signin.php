<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth'); 
		$this->load->helper('string','form');
		
		$this->load->library(array('session','form_validation', 'Recaptcha'));

		$this->load->library('akper/auth_akper',[
			'username' => 'email',
			'password' => 'password'
		]);
		$this->load->library('akper/auth_akper');
		$this->auth_akper->setBaseTable('pmb');
		// $this->auth_akper->setBaseTable('pmb');
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
			'is_active' 		=> 'is_active',
			'status' 		=> 'login',
			'is_pmb'		=> true
		]);

	}

	public function index()
	{
		$this->load->view('v_portal');
	}
	public function mahasiswa(){
		$this->load->view('auth/mahasiswa/v_signin');
	}
	public function management(){
		$this->load->view('auth/management/v_signin');
	}
	public function pmb(){
		$this->load->view('auth/pmb/v_signin');
	}
	public function daftar(){
		$this->load->view('auth/pmb/v_daftar');
	}
	// auth management
	public function get_pw($raw_password)
	{
		$this->config->load('setting');
		$prefix = $this->config->item('password_prefix','security');
		$new_pass = sprintf("%s%s",$prefix,$raw_password);
		$hash = password_hash($new_pass,PASSWORD_DEFAULT);
		return print($hash);
	}
	private function getPasswordWithPrefix($raw_password)
	{
		$this->config->load('setting');
		$prefix = $this->config->item('password_prefix','security');
		$new_pass = sprintf("%s%s",$prefix,$raw_password);
		return $new_pass;
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
			return redirect('signin/daftar');	
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
				return redirect('signin/pmb');	
			}
		}
		
		
	}else{
		$this->session->set_flashdata('email_sudah_ada','<div class="alert alert-warning text-center" role="alert">
				                         Maaf form email Harus di isi
				                       </div>');
		return redirect('signin/daftar');	
	}

	}
	public function c_proses_login()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == TRUE) {
			$data = [
			'email' 	=> $this->input->post('email'),
			'password'	=> $this->getPasswordWithPrefix($this->input->post('password'))
		];
		$login = $this->auth_akper->login($data);
		if ($login) 
		{
			if ($this->session->level == 'pmb_baru' ) 
			{
				return redirect('pmb');
			} elseif ($this->session->level == 'pmb_lamah') 
			{
				return redirect('pmb/detail');
			}
		} else 
		{
			$this->session->set_flashdata('gagal','
				<div class="alert alert-danger" role="alert">
                         <center>Maaf email atau password anda Salah !</center>
                       </div>
				');
			return redirect('signin/pmb');
		}
	}else{
		$this->session->set_flashdata('empty','<div class="alert alert-warning text-center" role="alert">
				                         Masukan Email atau Password untuk Login kehalaman PMB
				                       </div>');
		redirect('signin/pmb'); 
	}
	}

	public function keluar_pmb()
	{
		
		$this->session->sess_destroy();
		return redirect('signin/pmb');	


		
		
		
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
	

}

/* End of file Signin.php */
/* Location: ./application/controllers/Signin.php */
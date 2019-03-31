<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_auth'); 


		$this->load->library('akper/auth_akper');
		// $this->auth_akper->setBaseTable('pmb');
		// Session yang dibuat setelah 'auth' berhasil,
		// Formatnya: 
		// 		key 	=> nama session key nya
		// 		value 	=> ketika valuenya string, dia akan ngecek ke database sesuai nama, jika ditemukan dia akan mereturn nilai dari database, jika tidak ada akan mereturn string value nya 
		$this->auth_akper->setSessionData([
			'udahlogin' 	=> true,
			'manajemen' 	=> true,

			'username'		=> 'username',
			'id_user' 		=> 'id_user',
			'status' 		=> 'login'
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
	public function c_proses_login_admin()
	{
		$data = [
			'username' 	=> $this->input->post('username'),
			'password'	=> $this->getPasswordWithPrefix($this->input->post('password'))
		];
		$login = $this->auth_akper->login($data);
		if ($login) 
		{
			return redirect('dashboard/index');
			
		} else
		{
				$this->session->set_flashdata('gagal','
					<div class="alert alert-danger text-center" role="alert">
	                         Maaf Email atau Password anda Salah !
	                       </div>
					');
				redirect('signin/management');			
		}
	}


	public function c_keluar(){
				$this->session->sess_destroy();
				redirect('signin/management');
	}

}

/* End of file Signin.php */
/* Location: ./application/controllers/Signin.php */
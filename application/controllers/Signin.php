<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends MY_Controller {
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

}

/* End of file Signin.php */
/* Location: ./application/controllers/Signin.php */
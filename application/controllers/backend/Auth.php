<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
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
	public function index(){
		$this->load->view('frontend/auth/v_user_login');
	}
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
			return redirect('backend/dashboard/index');
			// return print_r($this->session);
		} else
		{
				$this->session->set_flashdata('gagal','
					<div class="alert alert-danger text-center" role="alert">
	                         Maaf Email atau Password anda Salah !
	                       </div>
					');
				redirect('auth/login');			
		}
			// $email = $this->input->post('email', true);
			// $spassword = $this->input->post('password', true);
			// $password = $spassword;
			// $cek = $this->m_auth->m_proses_login_admin($email, $password);
			// $hasil = count($cek);
			// if ($hasil > 0) {
			// 	$yanglogin = $this->db->get_where('user', array('email'=>$email,'password'=>$password))->row();
			// 	$data = array('udahlogin'=>true,
			// 		'nama_lengkap'=> $yanglogin->nama_lengkap,
			// 		'email'=> $yanglogin->email,
			// 		'level'=> $yanglogin->level,
			// 		'id_user' => $yanglogin->id_user,
			// 		'status' => 'login'

			// 	);
				
			// 	$this->session->set_userdata($data);
			// 	if ($yanglogin->level == 'superadmin') {
			// 		redirect('backend/dashboard/index');
			// 	}elseif ($yanglogin->level == 'akademik') {
			// 		redirect('backend/dashboard/index');


			// 	}elseif ($yanglogin->level == 'keuangan') {
			// 		redirect('backend/dashboard/index');
			// }else{
			// 	$this->session->set_flashdata('gagal','
			// 		<div class="alert alert-danger" role="alert">
	  //                        Maaf Email atau Password anda Salah !
	  //                      </div>



			// 		');
			// 	redirect('auth/login');
			// }
		// }


	}
	public function c_keluar(){
				$this->session->sess_destroy();
				redirect('backend/auth');
	}

}
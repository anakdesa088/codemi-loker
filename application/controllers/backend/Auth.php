<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
function __construct(){
	parent::__construct();
	$this->load->model('m_auth'); 
}
public function index(){
	$this->load->view('frontend/auth/V_user_login');
}
public function c_proses_login_admin(){
		$email = $this->input->post('email', true);
		$spassword = $this->input->post('password', true);
		$password = $spassword;
		$cek = $this->m_auth->m_proses_login_admin($email, $password);
		$hasil = count($cek);
		if ($hasil > 0) {
			$yanglogin = $this->db->get_where('user', array('email'=>$email,'password'=>$password))->row();
			$data = array('udahlogin'=>true,
				'nama_lengkap'=> $yanglogin->nama_lengkap,
				'email'=> $yanglogin->email,
				'level'=> $yanglogin->level,
				'id_user' => $yanglogin->id_user,
				'status' => 'login'

			);
			
			$this->session->set_userdata($data);
			if ($yanglogin->level == 'superadmin') {
				redirect('backend/dashboard/index');
			}elseif ($yanglogin->level == 'akademik') {
				redirect('backend/dashboard/index');


			}elseif ($yanglogin->level == 'keuangan') {
				redirect('backend/dashboard/index');
		}else{
			$this->session->set_flashdata('gagal','
				<div class="alert alert-danger" role="alert">
                         Maaf Email atau Password anda Salah !
                       </div>



				');
			redirect('auth/login');
		}
	}


}
public function c_keluar(){
			$this->session->sess_destroy();
			redirect('backend/auth');
}

}
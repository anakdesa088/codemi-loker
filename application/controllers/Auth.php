<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('string');
		$this->load->model('m_auth');
		
		$this->load->library(array('session','form_validation', 'Recaptcha'));
	}
	
	public function daftar()
	{	
		$data['captcha'] = $this->recaptcha->getWidget();
            $data['script_captcha'] = $this->recaptcha->getScriptTag();
		$this->load->view('frontend/daftar',$data);
	}
	public function c_proses_daftar(){
		$email = $this->input->post('email', true);
		$password = random_string('basic',8);
		$array = array('email'=>$email,'password'=>$password);
		$daftar = $this->m_auth->m_proses_daftar($array);
		if ($daftar > 0) {
			$this->session->set_flashdata('berhasil','<div class="alert alert-success" role="alert">
                         Success ! Silahkan cek email anda
                       </div>
');	
			redirect('auth/daftar',$password);
		}
	}

	public function random(){
		echo random_string('basic',20);
	}
	public function login(){
		$this->load->view('frontend/login');
	}
	public function c_proses_login(){
		$email = $this->input->post('email', true);
		$spassword = $this->input->post('password', true);
		$password = $spassword;
		$cek = $this->m_auth->m_proses_login($email, $password);
		$hasil = count($cek);
		if ($hasil > 0) {
			$yanglogin = $this->db->get_where('pendaftaran', array('email'=>$email,'password'=>$password))->row();
			$data = array('udahlogin'=>true,
				'nama_lengkap'=> $yanglogin->nama_lengkap,
				'email'=> $yanglogin->email,
				'level'=> $yanglogin->level,
				'id_pendaftar' => $yanglogin->id_pendaftar,
				'email' => $yanglogin->email,
				'status' => 'login'

			);
			$id_pendaftar = $yanglogin->id_pendaftar;
			$this->session->set_userdata($data);
			if ($yanglogin->level == 'mahasiswa_baru') {
				echo "anda mahasiswa baru";
			}elseif ($yanglogin->level == 'mahasiswa') {
					redirect('page/pmb/'.$id_pendaftar);


			}
		}else{
			$this->session->set_flashdata('gagal','
				<div class="alert alert-danger" role="alert">
                         Maaf Email atau Password anda Salah !
                       </div>



				');
			redirect('auth/login');
		}
	}

	public function c_keluar(){
			$this->session->sess_destroy();
			redirect('auth/login');
	}

}

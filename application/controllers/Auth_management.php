<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_management extends Manajemen_only
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_auth');
	}

	public function index(){
		redirect('auth_management/login');
	}
	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function login()
	
	{

		$session_data = $this->session->userdata();
        if($session_data['logged_in'] == TRUE) {
            redirect('dashboard', 'refresh');
        }

		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            // true case
           	$email_exists = $this->model_auth->check_email_user($this->input->post('email'));

           	if($email_exists == TRUE) {
           		$login = $this->model_auth->login_user($this->input->post('email'), $this->input->post('password'));

           		if($login) {

           			$logged_in_sess = array(
           				'id' => $login['id'],
				        'username'  => $login['username'],
				        'email'     => $login['email'],
				        'management' => TRUE,

				        'logged_in' => TRUE
					);

					$this->session->set_userdata($logged_in_sess);
           			redirect('dashboard', 'refresh');
           		}
           		else {
           			$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <span><center>Password anda salah </center></span></div>');
                redirect('auth_management/login');
           		}
           	}
           	else {

 				$email_dosen = $this->model_auth->check_email_dosen($this->input->post('email'));
 				if($email_dosen == TRUE) {
           		$login_dosen = $this->model_auth->login_dosen($this->input->post('email'), $this->input->post('password'));

           		if($login_dosen) {

           			$logged_in_sessi = array(
           				'id_dosen' => $login_dosen['id_dosen'],
				        'nama_dosen'  => $login_dosen['nama_dosen'],
				        'email'     => $login_dosen['email'],
				        'dosen' => TRUE,
				        'logged_in' => TRUE
					);




					$this->session->set_userdata($logged_in_sessi);
           			redirect('dashboard', 'refresh');
           			
           		}
           		else {
                $this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <span><center>Email atau Password anda salah </center></span></div>');
           			redirect('auth_management/login');
           		}
           	}
           		$this->session->set_flashdata('gagal','<div class="alert alert-danger" role="alert"> <span><center>Email atau Password anda salah </center> </span></div>');
                redirect('auth_management/login');
           	}	
        }
        else {
           


            $this->load->view('auth/management/v_signin');
        }	
	}

	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth_management', 'refresh');
	}
  public function logout_mhs()
  {
    $this->session->sess_destroy();
    redirect('signin/mahasiswa', 'refresh');
  }

}

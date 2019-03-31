<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('mahasiswa/v_login_mahasiswa');
	}

}

/* End of file Auth.php */
/* Location: ./application/modules/mahasiswa/controllers/Auth.php */
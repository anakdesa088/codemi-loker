<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

	public function index()
	{
		redirect('auth/auth');
	}

}

/* End of file page.php */
/* Location: ./application/controllers/page.php */
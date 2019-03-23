<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends MY_Controller {

	public function index()
	{
		$this->template->render('kelas/v_kelas');
	}

}

/* End of file Kelas.php */
/* Location: ./application/modules/kelas/controllers/Kelas.php */
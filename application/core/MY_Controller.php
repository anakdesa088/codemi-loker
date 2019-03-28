<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->library('akper/template',[
			'base_view'     => 'template/layout',

			'partial_view'  => [
					'header'        => 'template/header',
					'sidebar'       => 'template/sidebar',
					'footer'        => 'template/footer',
				]
			]);		
		
	}
	public function index()
	{
		
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
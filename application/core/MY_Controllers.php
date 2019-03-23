<?php
class MY_Controller extends CI_Controller
{ 
    public function __construct()
    {
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
}

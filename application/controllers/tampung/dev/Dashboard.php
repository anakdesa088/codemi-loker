<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('m_dashboard');


        // Load library template
        $this->load->library('akper/template',[
            'base_view'     => 'testview/template/layout',
            'partial_view'  => [
                    'header'        => 'testview/template/header',
                    'sidebar'       => 'testview/template/sidebar',
                    'footer'        => 'testview/template/footer',
            ]
        ]);
        // Load Custom URL helper untuk meload asset folder
        $this->load->helper('asset');
    }
	public function index()
	{
        return $this->template->render('testview/content/home',['nama' => 'panggilsayang']);
	}
}

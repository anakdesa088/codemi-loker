<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_dashboard');
        $this->load->library('akper/template',[
            'base_view'     => 'template/layout',
            'partial_view'  => [
                    'header'        => 'template/header',
                    'sidebar'       => 'template/sidebar',
                    'footer'        => 'template/footer',
            ]
        ]);	
        $this->load->library('akper/auth_akper');
        if (!$this->auth_akper->is_login('manajemen')) 
        {
        	return redirect('backend/auth');
        }
	}

	public function index()
	{	
		$this->template->render('content/home');
	}

	public function keuangan(){
		$data['tampil'] = $this->m_dashboard->m_get_pmb();
		$data['isi'] = 'content/keuangan/pmb/v_data_pmb.php';
		$this->load->view('testview/template/layout',$data);
	}
	public function tambah_keuangan(){
		$data['isi'] = 'content/keuangan/pmb/v_tambah_pmb.php';
		$this->load->view('testview/template/layout', $data);
	}
	
}

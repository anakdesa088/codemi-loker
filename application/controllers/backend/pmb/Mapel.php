<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_mapel_pmb','mapel'); 
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
		$data['no'] 	= 1;
		$data['data'] 	= $this->mapel->get_data_by_tahun();
        return $this->template->render('content/pmb/mapel/index',$data);
    }
}
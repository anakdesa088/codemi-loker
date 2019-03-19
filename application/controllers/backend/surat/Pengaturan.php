<?php
class Pengaturan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengaturan_surat');
    }
    public function index()
    {
        $data['no'] = 1;
        $data['list_pengaturan'] = $this->m_pengaturan_surat->get_data();
        return $this->template->render('surat/pengaturan/index',$data);
    }
    public function tambah()
    {
        return $this->template->render('surat/pengaturan/index');
    }
}
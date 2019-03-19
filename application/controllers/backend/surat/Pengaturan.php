<?php
class Pengaturan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return $this->template->render('surat/pengaturan/index');
    }
}
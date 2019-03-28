<?php
class Kode_transaksi extends Manajemen_only
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        return $this->template->render('keuangan/kode_transaksi/index');
    }
}

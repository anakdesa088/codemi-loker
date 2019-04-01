<?php
class Kode_transaksi extends Manajemen_only
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kode_transaksi');
        $this->load->helper('currency_helper');
    }
    public function index()
    {
        $data['kode_transaksi'] = $this->m_kode_transaksi->get_data();
        return $this->template->render('keuangan/kode_transaksi/index',$data);
    }
    public function tambah()
    {
        return $this->template->render('keuangan/kode_transaksi/tambah');
    }
    public function simpan()
    {
        // echo "<pre>";
        var_dump($this->m_kode_transaksi->insert($this->formData($this->input->post())));
    }

    // ListOfPrivateMethods
    private function formData($data)
    {
        $formData = [
            'kode_transaksi'        => $data['kode'],
            'nama_transaksi'        => $data['nama'],
            'tujuan_transaksi'      => $data['tujuan'],
            'jumlah_transaksi'      => $data['jumlah'],
            'deskripsi_transaksi'   => $data['deskripsi']
        ];
        return array_filter($formData);
    }
}
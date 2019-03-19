<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_ajaran extends Manajemen_only 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_tahun_ajaran','tahun_ajaran'); 
    }
    public function index()
    {
        $data['no'] 	= 1;
        $data['data'] 	= $this->tahun_ajaran->get_data();
        return $this->template->render('content/pmb/tahun_ajaran/index',$data);
    }
    public function tambah()
    {
        return $this->template->render('content/pmb/tahun_ajaran/tambah');        
    }
    public function edit($id)
    {
        $data['data'] 	= $this->tahun_ajaran->find($id);
        return $this->template->render('content/pmb/tahun_ajaran/edit',$data);        
    }
    
    // Belum dikasih flash message
    public function simpan()
    {
        $data = [
            'tahun_ajarancol' => $this->input->post('tahun_ajaran')
        ];
        $save = $this->tahun_ajaran->save($data);
        if($save)
        {
            return redirect('backend/pmb/tahun_ajaran');
        } else
        {
            return redirect('backend/pmb/tahun_ajaran/tambah');
        }
    }
    // Belum dikasih flash message
    public function update($id)
    {
        $data = [
            'tahun_ajarancol' => $this->input->post('tahun_ajaran')
        ];
        $save = $this->tahun_ajaran->update($id,$data);
        if($save)
        {
            return redirect('backend/pmb/tahun_ajaran');
        } else
        {
            return redirect('backend/pmb/tahun_ajaran/edit/'.$id);
        }
    }
    
    // Belum dikasih flash message
    public function hapus($id)
    {
        $this->tahun_ajaran->delete($id);
        return redirect('backend/pmb/tahun_ajaran');
    }
}
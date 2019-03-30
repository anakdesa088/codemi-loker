<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_mapel extends Manajemen_only 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_master_mapel','master_mapel'); 
    }
    public function index()
    {
        $data['no'] 	= 1;
        $data['data'] 	= $this->master_mapel->get_data();
        return $this->template->render('content/pmb/master_mapel/index',$data);
    }
    public function tambah()
    {
        return $this->template->render('content/pmb/master_mapel/tambah');        
    }
    public function edit($id)
    {
        $data['data'] 	= $this->master_mapel->find($id);
        return $this->template->render('content/pmb/master_mapel/edit',$data);        
    }
    
    // Belum dikasih flash message
    public function simpan()
    {
        $data = [
            'mapel_pmb_code' => $this->input->post('code'),
            'mapel_pmb_name' => $this->input->post('name'),
        ];
        $save = $this->master_mapel->save($data);
        if($save)
        {
            return redirect('backend/pmb/master_mapel');
        } else
        {
            return redirect('backend/pmb/master_mapel/tambah');
        }
    }
    // Belum dikasih flash message
    public function update($id)
    {
        $data = [
            'mapel_pmb_name' => $this->input->post('name'),
        ];
        $save = $this->master_mapel->update($id,$data);
        if($save)
        {
            return redirect('backend/pmb/master_mapel');
        } else
        {
            return redirect('backend/pmb/master_mapel/edit/'.$id);
        }
    }
    
    // Belum dikasih flash message
    public function hapus($id)
    {
        $this->master_mapel->delete($id);
        return redirect('backend/pmb/master_mapel');
    }
}
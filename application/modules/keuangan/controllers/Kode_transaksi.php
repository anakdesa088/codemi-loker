<?php
class Kode_transaksi extends Manajemen_only
{
    protected $postData;
    protected $model_manager;

    protected $model_name = 'm_kode_transaksi';
    // Untuk redirect ke module ini
    protected $module_url = 'keuangan/kode_transaksi';

    // Folder View
    protected $view_path = 'keuangan/kode_transaksi';

    public function __construct()
    {
        parent::__construct();
        $this->load->model($this->model_name);
        $this->load->helper('currency_helper');

        if(!empty($this->input->post()))
        {
            $this->postData = $this->input->post();
        }

        $this->model_manager = $this->{$this->model_name};
    }
    public function index()
    {
        $data['kode_transaksi'] = $this->model_manager->get_data();
        return $this->template->render($this->view_path.'/index',$data);
    }
    public function tambah()
    {
        return $this->template->render($this->view_path.'/tambah');
    }
    public function simpan()
    {
        $insertData = $this->formData($this->postData);
        $insert = $this->model_manager->insert_data($insertData);
        if($insert)
        {
            return redirect($this->module_url);
        }
        // If insert is failed
        return redirect($this->module_url.'/tambah');
    }
    public function edit($id)
    {
        $entity = $this->model_manager->find_by_id($id);
        return $this->template->render($this->view_path.'/edit',compact('entity'));
    }
    public function update($id)
    {
        $updateData = $this->formData($this->postData);

        // Prevent from user that plays around us :(
        if(isset($updateData['kode_transaksi'])) 
        {
            unset($updateData['kode_transaksi']);
        }

        $update = $this->model_manager->update_data($updateData,$id);
        if($update)
        {
            return redirect($this->module_url);
        }
        return redirect($this->module_url.'/edit/'.$id);
    }
    public function hapus()
    {
        $id = $this->postData['id'];
        $delete = $this->model_manager->delete_data($id);
        if($id && $delete)
        {
            $success_message = '<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus data dosen</span></div>';
            $response = [
                'success' => true,
                'message' => $success_message
            ];
        } else
        {
            $response = [
                'success' => false,
                'message' => 'Data gagal di hapus dikarenakan beberapa hal'
            ];
        }
        return print(json_encode($response));
        // return redirect($this->module_url);
    }
    public function api($url,$id = NULL)
    {
        switch ($url) 
        {
            case 'fetch_data_by_id':
                return $this->api_action_fetch($id);
                break;
            default:
                die('Jangan Iseng Laah');
                break;
        }
    }


    private function api_action_fetch($id)
    {
        if($id)
        {
            $data = $this->model_manager->find_by_id($id);
            return print(json_encode($data));
        }
        return FALSE;
    }
    // ListOfPrivateMethods
    private function formData($data)
    {
        $formData = [
            'kode_transaksi'        => isset($data['kode'])?$data['kode']:'',
            'nama_transaksi'        => $data['nama'],
            'tujuan_transaksi'      => $data['tujuan'],
            'jumlah_transaksi'      => $data['jumlah'],
            'deskripsi_transaksi'   => $data['deskripsi']
        ];
        return array_filter($formData);
    }
}
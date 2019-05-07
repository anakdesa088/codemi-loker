<?php 

class Group extends Manajemen_only 
{
    public function __construct()
    {
        parent::__construct();

        $this->not_logged_in();
        $this->sesi_mahasiswa();

        $this->data['page_title'] = 'Groups';
        

        $this->load->model('model_groups');
    }

    /* 
    * It redirects to the manage group page
    * As well as the group data is also been passed to display on the view page
    */
    public function index()
    {

        if(!in_array('viewGroup', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        $groups_data = $this->model_groups->getGroupData();
        $this->data['tampil'] = $groups_data;

        $this->template->render('group/v_group', $this->data);
    }   

    /*
    * If the validation is not valid, then it redirects to the create page.
    * If the validation is for each input field is valid then it inserts the data into the database 
    * and it stores the operation message into the session flashdata and display on the manage group page
    */
    public function tambah_group()
    {

        if(!in_array('createGroup', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        
        
            // false case
            $this->template->render('group/v_tambah_group');
           
    }
    public function proses_tambah_group(){
                $this->form_validation->set_rules('group_name', 'Nama Group', 'required');

        if ($this->form_validation->run() == TRUE) {
            // true case
            $permission = serialize($this->input->post('permission'));
            
            $data = array(
                'group_name' => $this->input->post('group_name'),
                'permission' => $permission
            );

            $create = $this->model_groups->create($data);
            if($create == true) {
                $this->session->set_flashdata('success', 'Successfully created');
                redirect('group/', 'refresh');
            }
            else {
                $this->session->set_flashdata('errors', 'Error occurred!!');
                redirect('group/tambah_group', 'refresh');
            }

        }else{
            redirect('group/tambah_group', 'refresh');
        }

    }

    /*
    * If the validation is not valid, then it redirects to the edit group page 
    * If the validation is successfully then it updates the data into the database 
    * and it stores the operation message into the session flashdata and display on the manage group page
    */
    public function edit($id)
    {

        if(!in_array('updateGroup', $this->permission)) {
            redirect('dashboard', 'refresh');
        }

        
                // false case
                $group_data = $this->model_groups->getGroupData($id);
                $this->data['group_data'] = $group_data;
                $this->template->render('group/v_edit_group', $this->data); 
        
        
    }
    public function proses_edit($id){
        $this->form_validation->set_rules('group_name', 'Nama Group', 'required');

            if ($this->form_validation->run() == TRUE) {
                // true case
                $permission = serialize($this->input->post('permission'));
                
                $data = array(
                    'group_name' => $this->input->post('group_name'),
                    'permission' => $permission
                );

                $update = $this->model_groups->edit($data, $id);
                if($update == true) {
                    $this->session->set_flashdata('success', 'Successfully updated');
                    redirect('group/', 'refresh');
                }
                else {
                    $this->session->set_flashdata('errors', 'Error occurred!!');
                    redirect('group/edit/'.$id, 'refresh');
                }
              }  
    }

    /*
    * It removes the removes information from the database 
    * and it stores the operation message into the session flashdata and display on the manage group page
    */
    public function hapus_group(){
    $id_group = $this->input->post('id_group');

        $response = array();
        if($id_group) {
            $delete = $this->model_groups->m_hapus_group($id_group);
            if($delete == true) {
                $response['success'] = true;
                $response['messages'] = $this->session->set_flashdata('sukses','<div id="alert" class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus Group</span></div>
'); 
            }
            else {
                $response['success'] = false;
                $response['messages'] = "Gagal";
            }
        }
        else {
            $response['success'] = false;
            redirect('kelas');
        }

        echo json_encode($response);
    }

    public function fetchGroupDataById($id) 
    {
        if($id) {
            $data = $this->model_groups->getGroupData($id);
            echo json_encode($data);
        }

        return false;
    }


}
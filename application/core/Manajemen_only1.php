<?php
class Manajemen_only extends MY_Controller
{
    var $permission = array();

    public function __construct() 
    {
        parent::__construct();

        $group_data = array();
        if(empty($this->session->userdata('logged_in'))) {
            $session_data = array('logged_in' => FALSE);
            $this->session->set_userdata($session_data);
        }
        else {
            $user_id = $this->session->userdata('id');
            $this->load->model('model_groups');
            $group_data = $this->model_groups->getUserGroupByUserId($user_id);
            
            $this->data['user_permission'] = unserialize($group_data['permission']);
            $this->permission = unserialize($group_data['permission']);
        }
    }
    public function logged_in()
    {
        $session_data = $this->session->userdata();
        if($session_data['logged_in'] == TRUE) {
            redirect('dashboard', 'refresh');
        }
    }

    public function not_logged_in()
    {
        $session_data = $this->session->userdata();
        if($session_data['logged_in'] == FALSE) {
            redirect('auth_management', 'refresh');
        }
    }
    public function diag($data)
    {
        echo "<pre>";
        die(var_dump($data));
    }
}

<?php
class Manajemen_only extends MY_Controller
{
    protected $auth_url = 'signin/management';
    protected $auth_session_identity = 'manajemen';
    public function __construct()
    {
        parent::__construct();
        $this->load->library('akper/auth_akper');
        if (!$this->auth_akper->is_login($this->auth_session_identity)) 
        {
        	return redirect($this->auth_url);
        }
        
    }
    public function diag($data)
    {
        echo "<pre>";
        die(var_dump($data));
    }
}

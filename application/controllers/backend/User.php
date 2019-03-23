<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Manajemen_only {
function __construct(){
	parent::__construct();
	$this->load->model('m_user'); 
}


}
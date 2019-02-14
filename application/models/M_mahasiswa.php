<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Controller {


	public function m_get_mhs($id){
		$this->db->where('id_pmb',$id);
		$data = $this->db->get('pmb');
		return $data->row();
	}






}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {


	public function m_get_dosen(){
		$data = $this->db->get('dosen');
		return $data->result();
	}
	public function m_proses_tambah_dosen($data){
		$tambah = $this->db->insert('dosen',$data);
		return $tambah;
	}
	public function m_edit_dosen($id){
		$this->db->where('id_dosen',$id);
		$data = $this->db->get('dosen');
		return $data->row();
	}


}

/* End of file M_dosen.php */
/* Location: ./application/models/M_dosen.php */
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembagian_matkul extends CI_Model {

	
	public function m_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function m_mapel(){
		$data = $this->db->get('mapel_mahasiswa');
		return $data->result();
	}
	public function m_tampil(){
		
	}

}

/* End of file M_pembagian_makul.php */
/* Location: ./application/modules/pembagian_makul/models/M_pembagian_makul.php */
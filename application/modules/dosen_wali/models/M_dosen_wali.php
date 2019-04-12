<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen_wali extends CI_Model {

	public function m_data_dosen_wali(){
		$this->db->select(['a.id_dosen_wali','a.keterangan','b.id_dosen','b.nama_lengkap','c.id_kelas','c.nama_kelas']);
		$this->db->from('dosen_wali a');
		$this->db->join('dosen b','b.id_dosen = a.id_dosen_wali','left');
		$this->db->join('kelas c','c.id_kelas = a.id_kelas','left');
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_proses_tambah_dosen_wali($data)
	{
		$tambah = $this->db->insert('dosen_wali',$data);
		return $tambah; 
	}



	public function m_dosen(){
		$data = $this->db->get('dosen');
		return $data->result();
	}
	public function m_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}	

}

/* End of file M_dosen_wali.php */
/* Location: ./application/modules/dosen_wali/models/M_dosen_wali.php */
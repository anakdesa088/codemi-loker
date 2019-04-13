<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen_wali extends CI_Model {

	public function m_data_dosen_wali(){
		$this->db->select(['a.id_dosen','a.nama_dosen','a.tmpt_lahir','a.tgl_lahir','a.jk','a.alamat','a.tahun_masuk','b.id_kelas','b.nama_kelas']);
		$this->db->from('dosen a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$data = $this->db->get('');
		
		return $data->result();
	}
	public function m_proses_tambah_dosen_wali($data)
	{
		$tambah = $this->db->insert('dosen',$data);
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
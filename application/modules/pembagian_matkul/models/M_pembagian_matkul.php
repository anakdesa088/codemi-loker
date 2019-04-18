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
		$this->db->select(['a.id_pembagian_matkul','b.id_kelas','b.nama_kelas','c.id_mapel','c.nama_mapel']);
		$this->db->from('pembagian_matkul a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('mapel_mahasiswa c','c.id_mapel = a.id_mapel','left');
		$data = $this->db->get('');
		return $data->row();
	}

}

/* End of file M_pembagian_makul.php */
/* Location: ./application/modules/pembagian_makul/models/M_pembagian_makul.php */
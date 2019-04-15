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
		$this->select(['a.id_pembagian_katkul','b.id_mapel','b.nama_mapel','c.id_kelas','c.nama_kelas']);
		$this->db->from('pembagian_makul a');
		$this->db->join('mapel_mahasiswa b','b.id_mapel = a.id_mapel','left');
		$this->db->join('kelas c','c.id_kelas = a.id_kelas','left');
		$data = $this->db->get('');
		return $data->result();
	}

}

/* End of file M_pembagian_makul.php */
/* Location: ./application/modules/pembagian_makul/models/M_pembagian_makul.php */
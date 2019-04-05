<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_khs extends CI_Model {

	public function m_data_khs(){
		$this->db->select(['a.id_khs','a.sks','a.nilai_mutu','a.nilai_lambang','a.nilai_sks','b.id_mapel','b.nama_mapel']);
		$this->db->from('khs a');
		$this->db->join('mapel_mahasiswa b','b.id_mapel = a.id_mapel','left');
		$this->db->order_by('id_khs','asc');
		$data = $this->db->get('');
		return $data->result();

	}
	public function m_mapel(){
		$data = $this->db->get('mapel_mahasiswa');
		return $data->result();
	}
	public function m_proses_tambah_khs($data){
		$data = $this->db->insert('khs',$data);
		return $data;
	}

}

/* End of file M_khs.php */
/* Location: ./application/modules/khs/models/M_khs.php */
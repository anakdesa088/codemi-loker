<?php 

class M_krs extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	
	public function m_data_krs(){
		$this->db->select(['a.id_krs','a.semester','a.sks','a.is_active','a.dibuat_tanggal','b.id_kelas','b.nama_kelas','c.id_dosen','c.nama_lengkap','d.id_mapel','d.nama_mapel']);
		$this->db->from('krs a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('dosen c','c.id_dosen = a.id_dosen','left');
		$this->db->join('mapel_mahasiswa d','d.id_mapel = a.id_mapel','left');
		$data = $this->db->get();
		return $data->result_array();
	}

	//data kelas

	public function m_get_kelas(){
		$data = $this->db->get('kelas');
		return $data->result_array();
	}
	public function m_get_dosen(){
		$data = $this->db->get('dosen');
		return $data->result_array();
	}
	public function m_get_mapel(){
		$data = $this->db->get('mapel_mahasiswa');
		return $data->result_array();
	}

}
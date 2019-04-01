<?php 

class M_krs extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	
	public function getActiveKrs()
	{
		$sql = "SELECT * FROM krs WHERE is_active = ?";
		$query = $this->db->query($sql, array(1));
		return $query->result_array();
	}

	
	public function getKrsData($id = null)
	{
		if($id) {
			$sql = "SELECT * FROM krs WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		
		$this->db->select(['a.id_krs','a.semester','a.sks','a.is_active','a.dibuat_tanggal','b.id_kelas','b.nama_kelas','c.id_dosen','c.nama_lengkap','d.id_mapel','d.nama_mapel']);
		$this->db->from('krs a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('dosen c','c.id_dosen = a.id_dosen','left');
		$this->db->join('mapel_mahasiswa d','d.id_mapel = a.id_mapel','left');
		$data = $this->db->get();
		return $data->result_array();

		//$sql = "SELECT * FROM krs";
		//$query = $this->db->query($sql);
		//return $query->result_array();
	}

	public function m_tambah_krs($data)
	{
		if($data) {
			$insert = $this->db->insert('krs', $data);
			return ($insert == true) ? true : false;
		}
	}

	public function update($data, $id)
	{
		if($data && $id) {
			$this->db->where('id_krs', $id);
			$update = $this->db->update('krs', $data);
			return ($update == true) ? true : false;
		}
	}

	public function remove($id)
	{
		if($id) {
			$this->db->where('id_krs', $id);
			$delete = $this->db->delete('krs');
			return ($delete == true) ? true : false;
		}
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
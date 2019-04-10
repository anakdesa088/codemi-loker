<?php 

class M_krs extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function m_all_data_krs(){
		$this->db->select(['a.id_krs','a.semester','a.sks','a.dibuat_tanggal','b.id_kelas','b.nama_kelas','c.id_dosen','c.nama_lengkap','d.id_mapel','d.nama_mapel']);
		$this->db->from('krs a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('dosen c','c.id_dosen = a.id_dosen','left');
		$this->db->join('mapel_mahasiswa d','d.id_mapel = a.id_mapel','left');
		$this->db->order_by('semester','asc');
		$data = $this->db->get();
		return $data->result();
	}
	
	public function m_data_krs($kelas){
		$this->db->where('b.id_kelas',$kelas);
		$this->db->select(['a.id_krs','a.semester','a.sks','a.dibuat_tanggal','b.id_kelas','b.nama_kelas','c.id_dosen','c.nama_lengkap','d.id_mapel','d.nama_mapel']);
		$this->db->from('krs a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('dosen c','c.id_dosen = a.id_dosen','left');
		$this->db->join('mapel_mahasiswa d','d.id_mapel = a.id_mapel','left');
		$this->db->order_by('semester','asc');
		$data = $this->db->get();
		return $data->result();
	}
	
	public function m_jumlah(){
		$sql = "SELECT sum(sks) as sks from krs";
		$data = $this->db->query($sql);
		return $data->row()->sks;
	}


	public function m_proses_tambah_krs($data){
		$tambah = $this->db->insert('krs',$data);
		return $tambah;
	}
	public function m_edit_krs($id){
		$this->db->where('id_krs',$id);
		$this->db->select(['a.id_krs','a.semester','a.sks','a.dibuat_tanggal','b.id_kelas','b.nama_kelas','c.id_dosen','c.nama_lengkap','d.id_mapel','d.nama_mapel']);
		$this->db->from('krs a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('dosen c','c.id_dosen = a.id_dosen','left');
		$this->db->join('mapel_mahasiswa d','d.id_mapel = a.id_mapel','left');
		$this->db->order_by('id_kelas','asc');
		$data = $this->db->get();
		return $data->row();
	}
	function m_proses_edit_krs($id,$data){
		$this->db->where('id_krs',$id);
		$edit = $this->db->update('krs',$data);
		return $edit;
	}
		public function m_cek_id($id){
		$query = $this->db->where('id_khs', $id)->get('khs');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	public function m_hapus_krs($id){
		
			$this->db->where('id_krs', $id);
			$delete = $this->db->delete('krs');
			return ($delete == true) ? true : false;
		
	}
	public function getKrsData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM krs WHERE id_krs = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM krs";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

		
	public function m_cetak_krs(){
		
		$this->db->select(['a.id_krs','a.semester','a.sks','a.dibuat_tanggal','b.id_kelas','b.nama_kelas','c.id_dosen','c.nama_lengkap','d.id_mapel','d.nama_mapel']);
		$this->db->from('krs a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('dosen c','c.id_dosen = a.id_dosen','left');
		$this->db->join('mapel_mahasiswa d','d.id_mapel = a.id_mapel','left');
		$this->db->order_by('semester','asc');
		$data = $this->db->get();
		return $data->result();
	}	

	//data kelas


	public function m_get_kelas(){

		
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function m_kelas(){
		
		
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function m_get_dosen(){
		$data = $this->db->get('dosen');
		return $data->result();
	}
	public function m_get_mapel(){
		$data = $this->db->get('mapel_mahasiswa');
		return $data->result();
	}



}
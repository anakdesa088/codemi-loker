<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	public function m_data_pengumuman(){
		
		$this->db->select(['a.id_pengumuman','a.judul','a.pesan','a.tanggal_kirim','b.id_pmb','b.nama_lengkap','b.email']);
		$this->db->from('pengumuman a');
		$this->db->join('pmb b','b.id_pmb = a.id_pmb','left');
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_data_info($id){
		$this->db->where('b.id_pmb',$id);
		$this->db->select(['a.id_pengumuman','a.judul','a.pesan','a.tanggal_kirim','b.id_pmb','b.nama_lengkap','b.email']);
		$this->db->from('pengumuman a');
		$this->db->join('pmb b','b.id_pmb = a.id_pmb','left');
		$data = $this->db->get('');
		return $data->row();
	}

	public function m_all_data_info($id){
		$this->db->where('b.id_pmb',$id);
		$this->db->select(['a.id_pengumuman','a.judul','a.pesan','a.tanggal_kirim','b.id_pmb','b.nama_lengkap','b.email']);
		$this->db->from('pengumuman a');
		$this->db->join('pmb b','b.id_pmb = a.id_pmb','left');
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_view_info($id){
		$this->db->where('a.id_pengumuman',$id);
		$this->db->select(['a.id_pengumuman','a.judul','a.pesan','a.tanggal_kirim','b.id_pmb','b.nama_lengkap','b.email']);
		$this->db->from('pengumuman a');
		$this->db->join('pmb b','b.id_pmb = a.id_pmb','left');
		$data = $this->db->get('');
		return $data->row();
	}
	
	public function m_email_pmb(){
		$data = $this->db->get('pmb');
		return $data->result();
	}
	public function m_proses_tambah_pengumuman($data){
		$tambah = $this->db->insert('pengumuman',$data);
		return $tambah;
	}
	public function m_hapus_pengumuman($id){
		$this->db->where('id_pengumuman',$id);
		$hapus = $this->db->delete('pengumuman');
		return $hapus;
	}
	
	

}

/* End of file M_pengumuman.php */
/* Location: ./application/modules/pengumuman/models/M_pengumuman.php */
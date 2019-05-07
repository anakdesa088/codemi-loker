<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	public function m_data_pengumuman(){
		
		$this->db->select(['a.id_pengumuman','a.judul','a.pesan','a.read','a.tanggal_kirim','b.id_pmb','b.nama_lengkap','b.email']);
		$this->db->from('pengumuman a');
		$this->db->join('pmb b','b.id_pmb = a.id_pmb','left');
		
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_data_info($id){
		$this->db->where('b.id_pmb',$id);
		$this->db->select(['a.id_pengumuman','a.judul','a.pesan','a.read','a.tanggal_kirim','b.id_pmb','b.nama_lengkap','b.email']);
		$this->db->from('pengumuman a');
		
		$this->db->join('pmb b','b.id_pmb = a.id_pmb','left');
		$data = $this->db->get('');
		return $data->row();
	}

	public function m_all_data_info($id){
		$this->db->where('b.id_pmb',$id);
		$this->db->select(['a.id_pengumuman','a.judul','a.pesan','a.read','a.tanggal_kirim','b.id_pmb','b.nama_lengkap','b.email']);
		$this->db->from('pengumuman a');
		$this->db->order_by('a.tanggal_kirim','desc');
		$this->db->join('pmb b','b.id_pmb = a.id_pmb','left');
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_view_info($id){
		$this->db->where('a.id_pengumuman',$id);
		$this->db->select(['a.id_pengumuman','a.judul','a.pesan','a.read','a.tanggal_kirim','b.id_pmb','b.nama_lengkap','b.email']);
		$this->db->from('pengumuman a');
		$this->db->join('pmb b','b.id_pmb = a.id_pmb','left');
		$data = $this->db->get('');
		return $data->row();
	}
	public function m_read($id,$data){
		$this->db->where('id_pengumuman',$id);
		$edit = $this->db->update('pengumuman',$data);
		return $edit;
	}
	public function m_email_pmb(){
		$data = $this->db->get('pmb');
		return $data->result();
	}
	public function m_email_mhs(){
		$data = $this->db->get('mahasiswa');
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
	public function m_hapus_pengumuman_mhs($id){
		$this->db->where('id_pengumuman_mhs',$id);
		$hapus = $this->db->delete('pengumuman_mhs');
		return $hapus;
	}
	public function m_data_pengumuman_mhs(){
		
		$this->db->select('*');
		$this->db->from('pengumuman_mhs');
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = pengumuman_mhs.id_mahasiswa','left');
		
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_proses_tambah_pengumuman_mhs($data){
		$tambah = $this->db->insert('pengumuman_mhs',$data);
		return $tambah;
	}
	public function m_all_data_info_mhs($id){
		$this->db->where('mahasiswa.id_mahasiswa',$id);
		$this->db->select('*');
		$this->db->from('pengumuman_mhs');
		$this->db->order_by('tanggal_kirim','desc');
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = pengumuman_mhs.id_mahasiswa','left');
		$data = $this->db->get('');
		return $data->result();
	}
	public function m_read_mhs($id,$data){
		$this->db->where('id_pengumuman_mhs',$id);
		$edit = $this->db->update('pengumuman_mhs',$data);
		return $edit;
	}
	public function m_view_info_mhs($id){
		$this->db->where('id_pengumuman_mhs',$id);
		$this->db->select('*');
		$this->db->from('pengumuman_mhs');
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = pengumuman_mhs.id_mahasiswa','left');
		$data = $this->db->get('');
		return $data->row();
	}
	public function m_data_pengumuman_dosen($id_dosen){
		$this->db->where('dosen.id_dosen',$id_dosen);
		$this->db->select('*');
		$this->db->from('pengumuman_dosen');
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = pengumuman_dosen.id_mahasiswa','left');
		$this->db->join('dosen','dosen.id_dosen = pengumuman_dosen.id_dosen','left');
		
		$data = $this->db->get();
		return $data->result();
	}
	public function m_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function m_cek_kelas_mhs($id_kelas){
		$this->db->where('id_kelas',$id_kelas);
		$data  = $this->db->get('mahasiswa');
		return $data->result();
	}
	

}

/* End of file M_pengumuman.php */
/* Location: ./application/modules/pengumuman/models/M_pengumuman.php */
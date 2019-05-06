<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_khs extends CI_Model {

	

	public function m_cek_kelas($nim){
		
		$this->db->select('nim,id_kelas');
		$this->db->from('mahasiswa');
		$this->db->like('nim',$nim);
		$data = $this->db->get('');
		return $data->result();

	}
	public function m_mahasiswa($nim){
		$this->db->where('a.nim',$nim);

		
		$this->db->select(['a.id_mahasiswa','a.nama_lengkap','a.nim','a.tmpt_lahir','a.tgl_lahir','b.id_semester','b.nama_semester','c.id_tahun_ajaran','c.tahun_ajarancol']);
		$this->db->from('mahasiswa a');

		$this->db->join('semester b','b.id_semester = a.id_semester','left');
	$this->db->join('tahun_ajaran c','c.id_tahun_ajaran = a.id_tahun_ajaran','left');
		$data = $this->db->get('');
		
		return $data->row();
	}

public function m_tampil($kelas){
	$this->db->where('b.id_kelas',$kelas);
	$this->db->select(['a.id_pembagian_matkul','b.id_kelas','b.nama_kelas','c.id_mapel','c.nama_mapel']);
	$this->db->from('pembagian_matkul a');
	$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
	$this->db->join('mapel_mahasiswa c','c.id_mapel = a.id_mapel','left');
	$data= $this->db->get('');
	return $data->result();
}
public function m_data_khs($nim){
	$this->db->where('b.nim',$nim);
	$this->db->select(['a.id_khs','a.sks','a.nilai_mutu','a.nilai_lambang','a.nilai_sks','b.id_mahasiswa','b.nim','b.tmpt_lahir','b.tgl_lahir','b.id_semester','b.nama_lengkap','c.id_mapel','c.nama_mapel']);
	$this->db->from('khs a');
	$this->db->join('mahasiswa b','b.id_mahasiswa = a.id_mahasiswa','left');
	$this->db->join('mapel_mahasiswa c','c.id_mapel = a.id_mapel','left');
	
	$data = $this->db->get('');
	return $data->result();

}
public function m_hapus_khs($id){
	$this->db->where('id_khs',$id);
	$hapus = $this->db->delete('khs');
	return $hapus;
}
public function m_kelas(){
	$data = $this->db->get('kelas');
	return $data->result();
}
public function m_mapel(){
	$data = $this->db->get('mapel_mahasiswa');
	return $data->result();
}
public function m_filter($kelas){
	$this->db->where('kelas.id_kelas',$kelas);
	$this->db->select('*');
	$this->db->from('mahasiswa');
	$this->db->join('kelas','kelas.id_kelas = mahasiswa.id_kelas','left');
	$this->db->join('semester','semester.id_semester = mahasiswa.id_semester','left');
	$data = $this->db->get();
	return $data->result();
}
public function m_cek_mapel($id){
	$this->db->where('id_mapel',$id);
	$data = $this->db->get('mapel_mahasiswa');
	return $data->row();
}
public function m_khs_dosen($kelas,$mapel){
	$this->db->where('mahasiswa.id_kelas',$kelas);
	$this->db->where('mapel_mahasiswa.id_mapel',$mapel);
	$this->db->select('*');
	$this->db->from('nilai_uas');
	$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = nilai_uas.id_mahasiswa','left');
	//$this->db->join('semester','semester.id_semester = nilai_uas.id_semester','left');
	$this->db->join('mapel_mahasiswa','mapel_mahasiswa.id_mapel = nilai_uas.id_mapel','left');
	$data = $this->db->get();
	return $data->result();
}
public function m_kelas_mhs($id_kelas){
		$this->db->where('id_kelas',$id_kelas);
		$data = $this->db->get('mahasiswa');
		return $data->row();
	}

public function m_cek_kelas_mhs($id_kelas){
	$this->db->where('id_kelas',$id_kelas);
	$data = $this->db->get('kelas');
	return $data->row();
}
public function m_cek_matkul_mhs($id_mapel){
	$this->db->like('id_mapel',$id_mapel);
	$data = $this->db->get('mapel_mahasiswa');
	return $data->row();
}
public function m_khs_mhs($id_mahasiswa)
{
	$this->db->where('mahasiswa.id_mahasiswa',$id_mahasiswa);
	$this->db->select('*');
	$this->db->from('nilai_uas');
	$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = nilai_uas.id_mahasiswa','left');
	$this->db->join('mapel_mahasiswa','mapel_mahasiswa.id_mapel = nilai_uas.id_mapel','left');
	$this->db->join('dosen','dosen.id_dosen = nilai_uas.id_dosen','left');
	$data = $this->db->get();
	return $data->result();
}
public function m_info_mhs($id_mahasiswa){
	$this->db->where('id_mahasiswa',$id_mahasiswa);
	$this->db->select('*');
	$this->db->from('mahasiswa');
	$this->db->join('kelas','kelas.id_kelas = mahasiswa.id_kelas','left');
	$this->db->join('semester','semester.id_semester = mahasiswa.id_semester','left');
	$this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran = mahasiswa.id_tahun_ajaran','left');
	$data = $this->db->get();
	return $data->row();
}
}
/* End of file M_khs.php */
/* Location: ./application/modules/khs/models/M_khs.php */
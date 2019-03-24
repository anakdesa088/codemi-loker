<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_mahasiswa extends CI_Model {

						
	public function m_get_mahasiswa(){
		$this->db->select(['a.id_mahasiswa','a.nama_lengkap','a.nim','a.tmpt_lahir','a.tgl_lahir','a.alamat','a.jk','b.id_kelas','b.nama_kelas']);
		$this->db->from('mahasiswa a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$data = $this->db->get();
		return $data->result();

	}
	public function m_proses_tambah_mahasiswa($data){
		$tambah = $this->db->insert('mahasiswa',$data);
		return $tambah;
	}






}
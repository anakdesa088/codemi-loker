<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	public function m_get_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function m_proses_tambah_kelas($data){
		$tambah = $this->db->insert('kelas',$data);
		return $tambah;
	}
	public function m_edit_kelas($id){
		$this->db->where('id_kelas',$id);
		
		$edit = $this->db->get('kelas');
		return $edit->row();
	}
	public function m_proses_edit_kelas($id,$data){
		$this->db->where('id_kelas',$id);
		$edit = $this->db->update('kelas',$data);
		return $edit;
	}
	public function m_hapus_kelas($id){
		$this->db->where('id_kelas',$id);
		$hapus = $this->db->delete('kelas');
		return $hapus; 
	}

}

/* End of file M_kelas.php */
/* Location: ./application/models/M_kelas.php */
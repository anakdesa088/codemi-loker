<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumuman extends CI_Model {

	public function m_data_pengumuman(){
		
		$data = $this->db->get('pengumuman');
		return $data->result();
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
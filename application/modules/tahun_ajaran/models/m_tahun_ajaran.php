<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tahun_ajaran extends CI_Model {

	public function m_data_tahun_ajaran(){
		$data = $this->db->get('tahun_ajaran');
		return $data->result();
	}
	public function m_proses_tambah_tahun_ajaran($data){
		$tambah = $this->db->insert('tahun_ajaran',$data);
		return $tambah;
	}
	public function m_edit_tahun_ajaran($id){
		$this->db->where('id_tahun_ajaran',$id);
		$data = $this->db->get('tahun_ajaran');
		return $data->row();
	}
	public function m_proses_edit_tahun_ajaran($id,$data){
		$this->db->where('id_tahun_ajaran',$id);
		$edit = $this->db->update('tahun_ajaran',$data);
		return $edit;
	}

}

/* End of file m_tahun_ajaran.php */
/* Location: ./application/modules/tahun_ajaran/models/m_tahun_ajaran.php */
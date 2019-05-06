<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_biodata extends CI_Model {

	public function m_data_biodata($id){
		$this->db->where('id_mahasiswa',$id);
		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('kelas','kelas.id_kelas  = mahasiswa.id_kelas','left');
		$this->db->join('tahun_ajaran','tahun_ajaran.id_tahun_ajaran = mahasiswa.id_tahun_ajaran','left');
		
		$data = $this->db->get('');
		return $data->row();
	}	

}

/* End of file M_biodata.php */
/* Location: ./application/modules/biodata/models/M_biodata.php */
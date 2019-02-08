<?php





class M_dashboard extends CI_Model{
	public function m_get_pmb(){
		$data = $this->db->get('pendaftaran');
		return $data->result();
	}
	public function m_tambah_pmb($data){
		$tambah = $this->db->insert('pendaftaran',$data);
		return $tambah;

	}

}
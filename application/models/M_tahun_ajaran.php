<?php 
/**
 * 
 */
class M_tahun_ajaran extends CI_Model
{
	
	function find($id)
	{
		$this->db->where('id_tahun_ajaran',$id);
		$data = $this->db->get('tahun_ajaran');
		return $data->row();
	}
}
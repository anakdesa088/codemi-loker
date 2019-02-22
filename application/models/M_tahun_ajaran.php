<?php 
/**
 * 
 */
class M_tahun_ajaran extends CI_Model
{
	protected $table = 'tahun_ajaran';
	function find($id)
	{
		$this->db->where('id_tahun_ajaran',$id);
		$data = $this->db->get('tahun_ajaran');
		return $data->row();
	}
	public function get_data()
	{
		$data = $this->db->get($this->table);
		return $data->result();		
	}
}
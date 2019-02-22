<?php 
/**
 * 
 */
class M_master_mapel extends CI_Model
{
	protected $table = 'mapel_pmb';
	function find($id)
	{
		$this->db->where('id_mapel_pmb',$id);
		$data = $this->db->get('mapel_pmb');
		return $data->row();
	}
	public function get_data()
	{
		$data = $this->db->get($this->table);
		return $data->result();		
	}
	public function save($data)
	{
		$this->db->trans_start();
		$this->db->insert($this->table,$data);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	public function update($id,$data)
	{
		$this->db->trans_start();
		$this->db->where('id_mapel_pmb', $id);
		$this->db->update($this->table,$data);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	public function delete($id)
	{
		$this->db->trans_start();
		$this->db->delete($this->table,['id_mapel_pmb' => $id]);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}
}
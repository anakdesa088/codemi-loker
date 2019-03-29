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
		$this->db->where('id_tahun_ajaran', $id);
		$this->db->update($this->table,$data);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	public function delete($id)
	{
		$this->db->trans_start();
		$this->db->delete($this->table,['id_tahun_ajaran' => $id]);
		$this->db->trans_complete();
		return $this->db->trans_status();
	}
	public function get_tahun_ajaran(){
		$data = $this->db->get('tahun_ajaran');
		return $data->result();
	}
}
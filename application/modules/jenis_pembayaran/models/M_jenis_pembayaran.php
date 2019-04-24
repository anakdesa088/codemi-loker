<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_pembayaran extends CI_Model {

	public function m_tampil(){
		$data = $this->db->get('jenis_pembayaran');
		return $data->result();
	}	
	public function m_tambah_jenis_pembayaran($data){
		$tambah = $this->db->insert('jenis_pembayaran',$data);
		return $tambah;
	}
	public function m_edit_jenis_pembayaran($id){
	$this->db->where('id_jp',$id);
	$data = $this->db->get('jenis_pembayaran');
	return $data->row();
	}
	public function m_proses_edit_pembayaran($id,$data){
		
		$this->db->where('id_jp',$id);
		$edit = $this->db->update('jenis_pembayaran',$data);
		return $edit;

	}
	public function m_cek_id($id){
		
		$query = $this->db->where('id_jp', $id)->get('jenis_pembayaran');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	public function m_hapus_jenis_pembayaran($id){
		
			$this->db->where('id_jp', $id);
			$delete = $this->db->delete('jenis_pembayaran');
			return ($delete == true) ? true : false;
		
	}
	public function getJenisPembayaranData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM jenis_pembayaran WHERE id_jp = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM jenis_pembayaran";
		$query = $this->db->query($sql);
		return $query->result_array();
	}


}

/* End of file M_jenis_pembayaran.php */
/* Location: ./application/modules/jenis_pembayaran/models/M_jenis_pembayaran.php */
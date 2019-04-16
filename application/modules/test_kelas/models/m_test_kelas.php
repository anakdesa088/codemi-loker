<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_test_kelas extends CI_Model {

	function load_data()
	{
		$this->db->order_by('id_kelas', 'DESC');
		$query = $this->db->get('kelas');
		return $query->result_array();
	}

	function insert($data)
	{
		$this->db->insert('kelas', $data);
	}

	function update($data, $id_kelas)
	{
		$this->db->where('id_kelas', $id_kelas);
		$this->db->update('kelas', $data);
	}

	function delete($id)
	{
		$this->db->where('id_kelas', $id);
		$this->db->delete('kelas');
	}

}

/* End of file m_test_kelas.php */
/* Location: ./application/modules/test_kelas/models/m_test_kelas.php */
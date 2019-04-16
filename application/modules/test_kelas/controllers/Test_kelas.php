<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test_kelas extends Manajemen_only {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('test_kelas/m_test_kelas');
	}

	function index()
	{
		$this->template->render('test_kelas/v_test_kelas');
	}

	function load_data()
	{
		$data = $this->m_test_kelas->load_data();
		echo json_encode($data);
	}

	function insert()
	{
		$data = array(
			'nama_kelas'	=> $this->input->post('nama_kelas'),
			'kode_kelas'		=>	$this->input->post('kode_kelas'),
			'keterangan_kelas'			=>	$this->input->post('keterangan_kelas')
		);

		$this->m_test_kelas->insert($data);
	}

	function update()
	{
		$data = array(
			$this->input->post('table_column')	=>	$this->input->post('value')
		);

		$this->m_test_kelas->update($data, $this->input->post('id_kelas'));
	}

	function delete()
	{
		$this->m_test_kelas->delete($this->input->post('id_kelas'));
	}

}

/* End of file Test_kelas.php */
/* Location: ./application/modules/test_kelas/controllers/Test_kelas.php */
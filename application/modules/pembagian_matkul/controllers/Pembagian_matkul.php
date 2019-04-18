<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembagian_matkul extends Manajemen_only {
	var $data = array();
	public function __construct(){
		parent::__construct();
		$this->load->model('pembagian_matkul/m_pembagian_matkul');
	}

	public function index()
	{
	$data['kelas']	 = $this->m_pembagian_matkul->m_kelas();
	$data['mapel'] = $this->m_pembagian_matkul->m_mapel();
	$data['tampil'] = $this->m_pembagian_matkul->m_tampil();
	$this->template->render('pembagian_matkul/v_pembagian_matkul',$data);
	}
	public function insert()
	{
		
		$validation = array(
				array('field' => 'data_kelas[]', 'rules' => 'required'),
				array('field' => 'data_mapel[]', 'rules' => 'required')
				
		);

		$this->form_validation->set_rules($validation);
		if ($this->form_validation->run() == true) {
			$data_kelas = $this->input->post('data_kelas');
			$data_mapel = $this->input->post('data_mapel');
			
			
			

			
		$value = array();
		for ($i=0; $i < count($data_mapel); $i++) { 
			$value[$i] = array(
				'id_kelas' =>$data_kelas[$i],
				'id_mapel' =>$data_mapel[$i]
			);
		
		}
		$this->db->insert_batch('pembagian_matkul',$value);
		//	foreach ($data_kelas as $key) {
		//		array_push($value, array(
		//			'id_kelas' => $key,
					
			
		//		));
		//	}
		
		}

		
	}
	public function tampil(){
		
		$data['tampil'] = $this->m_pembagian_matkul->m_tampil();
		$this->template->render('pembagian_matkul/v_tampil',$data);
	}

}

/* End of file Pembagian_matkul.php */
/* Location: ./application/modules/pembagian_matkul/controllers/Pembagian_matkul.php */
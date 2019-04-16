<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class M_mahasiswa extends CI_Model {

						
	public function m_get_mahasiswa(){
		$this->db->select(['a.id_mahasiswa','a.nama_lengkap','a.nim','a.tmpt_lahir','a.tgl_lahir','a.alamat','a.jk','b.id_kelas','b.nama_kelas']);
		$this->db->from('mahasiswa a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$data = $this->db->get();
		return $data->result_array();

	}
	public function m_proses_tambah_mahasiswa($data){
		$tambah = $this->db->insert('mahasiswa',$data);
		return $tambah;
	}
	public function m_hapus_mahasiswa($id){
		
			$this->db->where('id_mahasiswa', $id);
			$delete = $this->db->delete('mahasiswa');
			return ($delete == true) ? true : false;
		
	}
	public function getMahasiswaData($id = null)
	{
		if($id) {

			$sql = "SELECT * FROM mahasiswa WHERE id_mahasiswa = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}
		
		$sql = "SELECT * FROM mahasiswa";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	public function m_edit_mahasiswa($id){
		$this->db->where('id_mahasiswa',$id);
		$this->db->select(['a.id_mahasiswa','a.nama_lengkap','a.nim','a.tmpt_lahir','a.tgl_lahir','a.alamat','a.jk','a.kewarganegaraan','a.tinggi_badan','a.berat_badan','a.email','a.password','a.kode_pos','a.nama_ayah','a.nama_ibu','a.foto_diri','a.no_hp1','a.no_hp2','a.info_dari','a.nama_asal_sekolah','a.tahun_masuk','a.alamat_asal_sekolah','b.id_kelas','b.nama_kelas','c.id_tahun_ajaran','c.tahun_ajarancol']);
		$this->db->from('mahasiswa a');
		$this->db->join('kelas b','b.id_kelas = a.id_kelas','left');
		$this->db->join('tahun_ajaran c','c.id_tahun_ajaran = a.id_tahun_ajaran','left');
		$data = $this->db->get();
		return $data->row();
	}
	public function m_proses_edit_mahasiswa($id,$data){
		$this->db->where('id_mahasiswa',$id);
		$edit = $this->db->update('mahasiswa',$data);
		return $edit;
	}
	public function m_cek_id($id){
		
		$query = $this->db->where('id_mahasiswa', $id)->get('mahasiswa');
		if($query->num_rows() > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
	public function m_kelas(){
		$data = $this->db->get('kelas');
		return $data->result();
	}
	public function upload_file($filename){
		$this->load->library('upload'); // Load librari upload
		 
		$config['upload_path'] = './excel/';
		$config['allowed_types'] = 'xlsx|xls|csv';
		$config['max_size']	= '2048';
		$config['overwrite'] = true;
		$config['file_name'] = $filename;
	
		$this->upload->initialize($config); // Load konfigurasi uploadnya
		if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

public function insert_multiple($data){
		$this->db->insert_batch('mahasiswa', $data);
	}




}
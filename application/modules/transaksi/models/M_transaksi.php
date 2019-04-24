<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function m_data_transaksi(){
		/*$this->db->select(['a.id_transaksi','a.kode_transaksi','b.nama_lengkap','b.id_mahasiswa','b.nim','c.id_jp','c.nama_jp','a.tanggal_transaksi','a.nominal_bayar']);
		$this->db->from('transaksi a');
		$this->db->join('mahasiswa b','b.id_mahasiswa = a.id_mahasiswa','left');
		$this->db->join('jenis_pembayaran c','c.id_jp = a.id_jp','left');
		$data = $this->db->get('');
		return $data->result();*/
		$this->db->select('*');
		$this->db->from('transaksi');
		$this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
		$this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
		$data = $this->db->get();
		return $data->result();
	}
	public function m_jenis_pembayaran(){
		$data = $this->db->get('jenis_pembayaran');
		return $data->result();
	}
	public function m_cek($nim){
        $query = $this->db->where('nim',$nim)->get('mahasiswa');
        if($query->num_rows() > 0) {
        	return true;
        }else{
        	return false;
        }
        
    }
    public function m_mahasiswa($nim){
    	$this->db->where('nim',$nim);
    	$data = $this->db->get('mahasiswa');
    	return $data->result();
    }
    public function m_tambah_transaksi($data){
    	$tambah = $this->db->insert('transaksi',$data);
    	return $tambah;
    }
    public function m_jp($id){
    	$this->db->where('id_jp',$id);
    	$data = $this->db->get('jenis_pembayaran');
    	return $data->result();
    }
    public function m_jps($id){
    	$hasil=$this->db->query("SELECT * FROM jenis_pembayaran WHERE id_jp='$id'");
        return $hasil->result();
    }
    function m_autocomplite($nim){
        $this->db->like('nim', $nim , 'both');
        $this->db->order_by('nim', 'ASC');
        $this->db->limit(10);
        return $this->db->get('mahasiswa')->result();
    }
    public function m_edit_transaksi($id){
        $this->db->where('id_transaksi',$id);
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('mahasiswa','mahasiswa.id_mahasiswa = transaksi.id_mahasiswa','left');
        $this->db->join('jenis_pembayaran','jenis_pembayaran.id_jp = transaksi.id_jp','left');
        $data = $this->db->get();
        return $data->row();
    }
    public function m_proses_edit_transaksi($id,$data){
        $this->db->where('id_transaksi',$id);
        $edit = $this->db->update('transaksi',$data);
        return $edit;
    }
    public function m_hapus_transaksi($id){
        
            $this->db->where('id_transaksi', $id);
            $delete = $this->db->delete('transaksi');
            return ($delete == true) ? true : false;
        
    }
    public function getTransaksiData($id = null)
    {
        if($id) {

            $sql = "SELECT * FROM transaksi WHERE id_transaksi = ?";
            $query = $this->db->query($sql, array($id));
            return $query->row_array();
        }
        
        $sql = "SELECT * FROM transaksi";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function m_cek_id($id){
        
        $query = $this->db->where('id_transaksi', $id)->get('transaksi');
        if($query->num_rows() > 0)
        {
            return true;
        } else
        {
            return false;
        }
    }
 


    


}

/* End of file M_transaksi.php */
/* Location: ./application/modules/transaksi/models/M_transaksi.php */
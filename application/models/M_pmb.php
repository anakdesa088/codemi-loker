<?php
class M_pmb extends CI_Model{

    public function is_get_no_ujian($id)
    {
		$this->db->where([
            'id_pmb'                => $id,
            'validasi_pembayaran'   => '1',
            'status_data'           => '1'
        ]);
        $data = $this->db->get('pmb');
        if($data->num_rows() > 0)
        {
            return $this->generate_no_ujian($id);
        } else
        {
            return NULL;
        }
    }
    private function generate_no_ujian($id)
    {
        $data = $this->db->select('ta.*')
                    ->where('id_pmb',$id)
                    ->from('pmb')
                    ->join('tahun_ajaran ta','pmb.id_tahun_ajaran=ta.id_tahun_ajaran')
                    ->get()->row();
        $no_peserta = sprintf("%s%04d",explode('/',$data->tahun_ajarancol)[0],random_int(1,9999));
        if($this->not_have_no_peserta($id))
        {
            $update = $this->update_no_ujian($id,$no_peserta);
            if(!$update)
            {
                return $this->generate_no_ujian($id);
            }    
        }
    }
    private function update_no_ujian($id,$no_peserta)
    {
        $this->db->trans_start();
        $this->db->update('pmb',['no_peserta' => $no_peserta],['id_pmb' => $id]);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
    private function not_have_no_peserta($id)
    {
		$this->db->where([
            'id_pmb'                => $id,
            'no_peserta'            => NULL,
        ]);
        $data = $this->db->get('pmb');
        if($data->num_rows() > 0)
        {
            return TRUE;
        } else
        {
            return FALSE;
        }
    }
    public function insert_nilai_ujian($batch_data)
    {
        return $this->db->insert_batch('nilai_ujian_pmb',$batch_data);
    }
    public function update_status_lulus($batch_data)
    {
        return $this->db->update_batch('pmb',$batch_data,'id_pmb');
    }
    public function generate_mahasiswa($batch_ids)
    {
        $data = $this->db->select('*')->from('pmb')->where_in('id_pmb',$batch_ids)->get();
        $new_mhs = array_map(function($r) {
            // $r = array_filter( $r);
            // $r->nim                 = $r->no_peserta;
            $r->nim                 = $r->no_peserta;
            $r->id_tahun_ajaran     = $r->id_tahun_ajaran;
            $r->tahun_masuk         = $r->id_tahun_ajaran;
            $r->first_time_login    = '1';
            unset($r->id_pmb,$r->is_lulus,$r->no_peserta,$r->is_active,$r->id_tahun_ajaran,$r->status_data);
            return $r;
        },$data->result());
        return $this->db->insert_batch('mahasiswa',$new_mhs);
        // return $new_mhs;
    }
    public function m_setting_password($id,$data){
        $this->db->where('id_pmb',$id);
        $edit = $this->db->update('pmb',$data);
        return $edit;
    }
}
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
                    ->join('tahun_ajaran ta','pmb.tahun_ajaran_id_tahun_ajaran=ta.id_tahun_ajaran')
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
}
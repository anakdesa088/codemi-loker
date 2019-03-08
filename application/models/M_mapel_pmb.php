<?php
class M_mapel_pmb extends CI_Model
{
	
	function get_data_by_tahun($id = NULL)
	{
        if (!is_null($id))
        {
            $this->db->where('id_tahun_ajaran',$id);
        }
        $query = $this->db->get('tahun_ajaran');
        $tahun_ajaran_list = $query->result();
        $arraytmplist = array_map(function($r) {
            return (array) $r;
        },$tahun_ajaran_list);
        $implode_tahun_ajaran = array_column($arraytmplist,'id_tahun_ajaran');
        $query = $this->db->select('ujian_pmb.id_tahun_ajaran,mapel_pmb.*')
                    ->from('ujian_pmb')
                    ->where_in('id_tahun_ajaran',$implode_tahun_ajaran)
                    ->join('mapel_pmb','ujian_pmb.id_mapel_pmb=mapel_pmb.id_mapel_pmb','left')->get();

        $result = [];        

        foreach ($query->result() as $value) 
        {
            $result[$value->id_tahun_ajaran][]  = $value; 
        }

        $mapping = array_map(function($arr) use($result){
            if(isset($result[$arr->id_tahun_ajaran])) {
                $arr->mapel = $result[$arr->id_tahun_ajaran];
            } else
            {
                $arr->mapel = NULL;
            }
            return $arr;
        },$tahun_ajaran_list);
        return $mapping;
    }
    public function get_mapel_except($ids = [])
    {
        if(!empty($ids))
        {
            $this->db->where_not_in('id_mapel_pmb',$ids);
        }
        return $this->get_mapel();
    }
    public function get_mapel()
    {
        $query = $this->db->get('mapel_pmb');
        return $query->result();
    }
    public function simpan_ujian_pmb($data,$is_batch = FALSE)
    {
        $table = 'ujian_pmb';
        return $this->raw_simpan($table,$data,$is_batch);
    }
    public function hapus_ujian_pmb($data)
    {
        $this->db->trans_start();
        $this->db->delete('ujian_pmb',$data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    private function raw_simpan($table,$data,$is_batch)
    {
        $this->db->trans_start();
        if($is_batch === TRUE)
        {
            $this->db->insert_batch($table,$data);
        } else
        {
            $this->db->insert($table,$data);
        }
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
}
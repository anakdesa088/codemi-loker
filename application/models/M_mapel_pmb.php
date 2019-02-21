<?php
class M_mapel_pmb extends CI_Model
{
	
	function get_data_by_tahun()
	{
        $result = [];
        $query = $this->db->get('tahun_ajaran');
        $tahun_ajaran_list = $query->result();


        $implode_tahun_ajaran = implode(',',array_column($tahun_ajaran_list,'id_tahun_ajaran'));
        
        $query = $this->db->select('ujian_pmb.id_tahun_ajaran,mapel_pmb.*')
                    ->from('ujian_pmb')
                    ->where_in('id_tahun_ajaran',$implode_tahun_ajaran,FALSE)
                    ->join('mapel_pmb','ujian_pmb.id_mapel_pmb=mapel_pmb.id_mapel_pmb','left')->get();
        foreach ($query->result() as $value) 
        {
            // $result[$value->id_tahun_ajaran]    = '12';
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
}

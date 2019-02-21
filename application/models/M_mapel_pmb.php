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
        $implode_tahun_ajaran = array_column($tahun_ajaran_list,'id_tahun_ajaran');
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
}
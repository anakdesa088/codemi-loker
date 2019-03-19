<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends Manajemen_only 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_mapel_pmb','mapel'); 
    }
    public function index()
    {
		$data['no'] 	= 1;
		$data['data'] 	= $this->mapel->get_data_by_tahun();
        return $this->template->render('content/pmb/mapel/index',$data);
	}
	public function tambah()
	{
		echo("Enaknya ini di isi apaan yak~");
	}
	public function edit($id)
	{
		$used_mapel = [];

		$data['data'] 		= $this->mapel->get_data_by_tahun($id);
		if(!is_null($data['data'][0]->mapel))
		{
			$arraytmpmapel = array_map(function($r) {
				return (array) $r;
			},$data['data'][0]->mapel);
			$used_mapel = array_column($arraytmpmapel,'id_mapel_pmb');			
		}
		
		$data['list_mapel'] = $this->mapel->get_mapel_except($used_mapel);

		// echo "<pre>";
		// return var_dump($data['list_mapel']);

        return $this->template->render('content/pmb/mapel/edit',$data);
	}
	private function buat_array_map()
	{
		$arr = array('1','2','3','4');
		$arr = array_map(function($arr) {
			return 'Nomor '.$arr;
		}, $arr);
		// foreach ($arr as $key => $value) 
		// {
		// 	$arr[$key] = "Nomor ".$value;
		// }
		echo "<pre>";
		var_dump($arr);
	}
	// Ini Belum dikasih flash message yak
	public function update($id)
	{
		$data = array_map(function($arr) use($id) {
			return [
				'id_tahun_ajaran' 	=> $id,
				'id_mapel_pmb'		=> $arr
			];
		},$this->input->post('mapel'));

		$save = $this->mapel->simpan_ujian_pmb($data,TRUE);
		if($save)
		{
			return redirect('backend/pmb/mapel/edit/'.$id);
		} else
		{
			return redirect('backend/pmb/mapel/edit/'.$id);
		}
	}
	
	// Ini Belum dikasih flash message yak
	public function hapus($id_tahun_ajaran,$id_mapel_pmb)
	{
		$hapus = $this->mapel->hapus_ujian_pmb(compact("id_tahun_ajaran","id_mapel_pmb"));
		echo "<pre>";
		return redirect('backend/pmb/mapel/edit/'.$id_tahun_ajaran);
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
use Faker\Factory;

class Ujian extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_mapel_pmb','mapel'); 
		$this->load->library('akper/template',[
			'base_view'     => 'template/layout',
			'partial_view'  => [
					'header'        => 'template/header',
					'sidebar'       => 'template/sidebar',
					'footer'        => 'template/footer',
				]
			]);		
		$this->load->library('akper/auth_akper');
		if (!$this->auth_akper->is_login('manajemen')) 
		{
			return redirect('backend/auth');
		}
    }
    public function index()
    {
        return $this->template->render('content/pmb/ujian/index');
    }
    public function download()
    {
        $faker = Faker\Factory::create();
        header("Content-Type:application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=format-nilai-ujian-pmb.xlsx");  //File name extension was wrong
        $get_pmb    = $this->db->get('pmb');
        $get_mapel  = $this->mapel->get_data_by_tahun(1)[0]->mapel;
        $total_mapel = count($get_mapel);
        echo "<p>Note: Untuk kolom status isi dengan L apabila lulus dan TL apabila tidak lulus</p>";
        echo "<table border='1'>";
        echo "<tr><td rowspan='2'>ID</td><td rowspan='2'>Nama</td><td colspan='$total_mapel'>Nilai</td><td rowspan='2'>Status</td>";
        $data = array_map(function($arr) {
            return "<td>".$arr->mapel_pmb_name."</td>";
        },$get_mapel);
        echo "<tr>";
        echo implode('',$data);
        echo "</tr>";
        foreach ($get_pmb->result() as $val) 
        {
            echo "<tr>";
            echo "<td>".$val->id_pmb."</td>";
            echo "<td>".$val->nama_lengkap."</td>";
            echo "<td>".$faker->numberBetween($min = 50, $max = 100)."</td>";
            echo "<td>".$faker->numberBetween($min = 50, $max = 100)."</td>";
            echo "<td>".$faker->numberBetween($min = 50, $max = 100)."</td>";
            echo "<td>".$faker->numberBetween($min = 50, $max = 100)."</td>";
            echo "<td>".$faker->randomElement($array = array ('L','TL'))."</td>";
            // echo str_repeat("<td></td>",$total_mapel+1);
            echo "</tr>";
        }
        echo "</table>";
    }
    public function upload()
    {
        $this->load->library('upload');
        $this->upload->initialize([
            'upload_path'   => './excel/',
            'allowed_types' => '*',
            'file_name'     => 'excel.xlsx'
        ]);
        exec('chmod -R 755 '.FCPATH.'excel');
        $filePath = FCPATH.'excel/excel.xlsx';
    //     if (!$this->upload->do_upload('excel_file')) {
    //         $data = array('error' => $this->upload->display_errors());
    //     } else {
    //         $data = array('upload_data' => $this->upload->data());
    //     }
    // die(var_dump($data));
        $reader     = ReaderFactory::create(Type::XLSX); // for XLSX files
        //$reader = ReaderFactory::create(Type::CSV); // for CSV files
        //$reader = ReaderFactory::create(Type::ODS); // for ODS files
        
        $reader->open($filePath);
        
        foreach ($reader->getSheetIterator() as $sheet) {
            foreach ($sheet->getRowIterator() as $row) {
                echo $row[2]."<br>";
            }
        }        
        $reader->close();        
    }
}
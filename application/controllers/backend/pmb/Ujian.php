<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;
use Faker\Factory;

class Ujian extends CI_Controller 
{
    private $mapel_line = 4;
    public function __construct()
    {
        parent::__construct();
		$this->load->model('m_mapel_pmb','mapel'); 
		$this->load->model('m_pmb'); 
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
    // Note: Method ini kudu di refactor!!!!
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
    // Note: ini masih makek cara kasar dan belum di refactor
    // Catatan lain, ini diupload dengan meng over write file yang sudah ada
    public function upload()
    {
        $this->load->library('upload');
        $this->upload->initialize([
            'upload_path'   => './excel/',
            'allowed_types' => '*',
            'file_name'     => 'excel.xlsx'
        ]);
        $this->upload->overwrite = true;
        if (!$this->upload->do_upload('excel_file')) 
        {
            die(json_encode([
                'pesan' => 'Upload Gagal',
                'error' => $this->upload->display_errors()
            ]));
        } else {
        }
        $upload_data = $this->upload->data();

        // Line ini sebenernya kepake ngga? Wkwkwk
        // Buat ngubah file permission
        exec('chmod -R 755 '.FCPATH.'excel');
        
        $filePath = $upload_data['full_path'];
        // die($filePath);
        return $this->readExcelAndInsertToDB($filePath);
    }
    private function readExcelAndInsertToDB($filePath)
    {
        $reader     = ReaderFactory::create(Type::XLSX); // for XLSX files
        //$reader = ReaderFactory::create(Type::CSV); // for CSV files
        //$reader = ReaderFactory::create(Type::ODS); // for ODS files
        
        $reader->open($filePath);
        $mapel = [];        
        $insert_data_nilai = [];
        $update_data_lulus = [];
        foreach ($reader->getSheetIterator() as $sheet) 
        {
            foreach ($sheet->getRowIterator() as $current_line => $row) 
            {
                if($current_line === $this->mapel_line)
                {
                    $db     = $this->db;
                    $mapel  = array_map(function($row) use($db) 
                    {
                        $res    = $db->select('id_mapel_pmb AS id,mapel_pmb_code AS code,mapel_pmb_name AS name')->from('mapel_pmb')->where('mapel_pmb_name',$row)->get()->row();
                        return $res;
                    },array_filter($row));
                } elseif($current_line > $this->mapel_line)
                {
                    $status_lulus = strtoupper(end($row)) === 'L'?'1':'0';


                    // Set data Lulus
                    $update_data_lulus[] = [
                        'id_pmb'    => $row[0],
                        'is_lulus'  => $status_lulus
                    ];
                    foreach ($mapel as $column => $val)
                    {
                        $insert_data_nilai[] =  [
                            'id_pmb'        => $row[0],
                            'id_mapel_pmb'  => $val->id,
                            'nilai'         => $row[$column]
                        ];
                    }
                }
            }
        }        
        $reader->close();

        // $this->m_pmb->insert_nilai_ujian($insert_data_nilai);
        // $this->m_pmb->update_status_lulus($update_data_lulus);
        $raw_new_mhs = array_filter($update_data_lulus, function($arr) {
            return $arr['is_lulus']==='1';
        });
        $new_mhs = array_column($raw_new_mhs,'id_pmb');
        $list_calon_mhs = $this->m_pmb->generate_mahasiswa($new_mhs);
        echo "<pre>";
        die(var_dump($list_calon_mhs));
    }

    private function getMapelItemValue($row)
    {
        array_splice($row,0,2);
        array_pop($row);
        return $row;
    }
}
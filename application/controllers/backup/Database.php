<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
use Ifsnop\Mysqldump as MysqlDumper;
class Database extends CI_Controller
{
	protected $menuListName; 
	function __construct()
	{
		parent::__construct();
		$this->load->library('akper/auth');
		
		$this->menuListName = [
			'test_aja' 	=> 'backup.database@test_aja',
			'test_view' => 'backup.database@test_view',
		];

		if(!$this->auth->is_authorized($this->menuListName))
		{
			return die('Matio kono, gak oleh buka2 iki rekkkkkk~');
		}
	}
	function dump()
	{
		// Test
		try 
		{
			$dateTime = sprintf("backup_sisfo_akper_%s",date('d_m_Y_H:i:s'));
			$dump = new MysqlDumper\Mysqldump(sprintf("mysql:host=%s;dbname=%s",$this->db->hostname,$this->db->database), $this->db->username, $this->db->password);
			$dump->start(FCPATH.sprintf("database/backup/%s.sql",$dateTime));
			return print(($dump)?'Backup sukses':'Backup gagal');
		} catch (\Exception $e) 
		{
			echo 'dumper error: ' . $e->getMessage();
		}
	}


	// Test Auth Library
	public function tester()
	{
		$this->load->library('akper/auth');
		echo "<pre>";
		var_dump($this->auth->login([
			'username' => 'admin',
			'password' => 'admin'
		]));
	}
	// Test Template Engine Library
	public function test_view()
	{
		$this->load->library('Akper/template',[
			'base_view' 	=> 'testview/template',
			'partial_view' 	=> [
				'header' => 'testview/header'
			]
		]);
		$this->template->render(['content' => 'testview/content'],[
			'asas' => 'Hello'
		]);
	}
	// Test Helper loader for assets
	public function test_helper()
	{
		// $this->apa_berhak();
// 		$this->load->helper('asset');
// 		echo "<img src='".assets('images/favicon.png')."'/>";
	}

	public function test_aja()
	{
		$this->load->library('akper/auth');
		echo "<pre>";
		var_dump($this->auth->get_router());
		// $this->apa_berhak();
	}
}
<?php
/**
 * 
 */
use Ifsnop\Mysqldump as MysqlDumper;
class Database extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function dump()
	{
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
}
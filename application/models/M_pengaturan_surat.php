<?php
class M_pengaturan_surat extends CI_Model
{
    protected $table = 'pengaturan_surat';
    public function __construct()
    {
        parent::__construct();
    }
    public function get_data()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    
}

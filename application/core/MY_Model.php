<?php
class MY_Model extends CI_Model
{
    protected $primaryKey;
    protected $table;

    // BASIC FUNCTIONALITY

    public function get_data()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function find_by_id($id)
    {
        $query = $this->db->select('*')->from($this->table)
                    ->where([$this->primaryKey => $id])
                    ->get();
        return $query->row();
    }
    public function insert($formattedData)
    {
        $this->db->trans_start();
        $this->db->insert($this->table,$formattedData);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }



    // GETTER AND SETTER METHOD

    /**
     * Get the value of table
     */ 
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Set the value of table
     *
     * @return  self
     */ 
    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    /**
     * Get the value of primaryKey
     */ 
    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    /**
     * Set the value of primaryKey
     *
     * @return  self
     */ 
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;

        return $this;
    }
}

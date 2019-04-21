<?php
class MY_Model extends CI_Model
{
    protected $primaryKey;
    protected $table;
    protected $selectedColumns = '*';
    // BASIC FUNCTIONALITY

    public function get_data()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function find_by_id($id)
    {
        $query = $this->db->select($this->selectedColumns)->from($this->table)
                    ->where([$this->primaryKey => $id])
                    ->get();
        return $query->row();
    }
    public function insert_data($formattedData)
    {
        $this->db->trans_start();
        $this->db->insert($this->table,$formattedData);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
    public function update_data($formattedData,$id)
    {
        $this->db->trans_start();
        $this->db->update($this->table,$formattedData,[$this->primaryKey => $id]);
        $this->db->trans_complete();
        return $this->db->trans_status();        
    }
    public function delete_data($id)
    {
        $this->db->trans_start();
        $this->db->delete($this->table,[$this->primaryKey => $id]);
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
    
    public function setSelectedColumns($string)
    {
        $this->selectedColumns = $string;
        return $this;
    }
}

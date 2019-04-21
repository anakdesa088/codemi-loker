<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Please_review_this_model extends CI_Model
{
    // Nama Tabel
    protected $tableName;
    protected $primaryKey;
    protected $eagerLoadSettings = [];
    protected $selectedColumns = '*';
    /*
        $search: 
            $search['columns']  = jika kolom yang dicari satu, maka gunakan string, jika lebih dari itu maka gunakan array
            $search['value']    = Nilai yang dicari, jika satu maka gunakan string, jika lebih maka pake array (sesuaikan urutan nya dengan 'columns')
            $search['clause']   = 'like' atau 'where'
            $search['multi_search_type']     = 'and' atau 'or'
            $search['wildcard'] = 'before', 'after', 'none' atau 'both' (untuk wildcard search like). Lebih lengkap 
    */
    protected $search = ['clause' => 'where'];
    /* Format: [
                ['table','cond','type'],
            ],
    */
    protected $joinClause = [];

    protected $debugQuery = false;
    public function getData($limit = NULL,$offset = NULL)
    {
        if (!empty($this->search) && count($this->search) > 1) 
        {
            $this->searchLogic();
        }
        $this->db->select($this->selectedColumns)
            ->from($this->tableName);

        if (!empty($this->joinClause)) 
        {
            foreach ($this->joinClause as $key => $val) 
            {
                if (isset($val['2'])) 
                {
                    $this->db->join($val['0'],$val['1'],$val['2']);
                } else
                {
                    $this->db->join($val['0'],$val['1']);
                }
            }
        }        

        $this->db->limit($limit,$offset);
        
        // Validate if query is debugged
        if ($this->debugQuery === TRUE) 
        {
            return $this->db->get_compiled_select();
        }

        $q = $this->db->get();        
        return $q->result();
    }
    private function searchLogic()
    {
            if (is_string($this->search['columns']) && is_string($this->search['value'])) 
            {
                $this->db->{$this->search['clause']}($this->search['columns'],$this->search['value']);
            } elseif(is_array($this->search['columns']) && is_string($this->search['value']))
            {
                $clause = $this->search['clause'];
                if (isset($this->search['multi_search_type']) && $this->search['multi_search_type'] == 'or') 
                {
                    $this->db->{$this->search['clause']}($this->search['columns'][0],$this->search['value']);
                    array_shift($this->search['columns']);
                    $clause = 'or_'.$this->search['clause'];
                }
                foreach ($this->search['columns'] as $key => $value) 
                {
                    $this->db->{$clause}($value,$this->search['value']);
                }
            } elseif(is_string($this->search['columns']) && is_array($this->search['value']))
            {
                $clause = "where_in";
                if (isset($this->search['multi_search_type']) && $this->search['multi_search_type'] == 'or') 
                {
                    $this->db->{$this->search['clause']}($this->search['columns'],$this->search['value'][0]);
                    array_shift($this->search['value']);
                    $clause = 'or_'.$this->search['clause'];
                    foreach ($this->search['value'] as $key => $value) 
                    {
                        $this->db->{$clause}($this->search['columns'],$value);
                    }
                } else
                {
                    $this->db->{$clause}($this->search['columns'],$this->search['value']);                    
                }
            } elseif (is_array($this->search['columns']) && is_array($this->search['value'])) 
            {
                $clause = $this->search['clause'];
                foreach ($this->search['columns'] as $key => $value) 
                {
                    if($key == 0 && isset($this->search['multi_search_type']) && $this->search['multi_search_type'] == 'or') 
                    {
                        $clause = 'or_'.$clause;
                    }
                    $this->search['value'][$key] = (isset($this->search['value'][$key]))?$this->search['value'][$key]:'';
                    $this->db->{$clause}($value,$this->search['value'][$key]);
                }
            }
    }
    public function findById($id)
    {
        $this->db->select($this->selectedColumns)
                ->from($this->tableName)
                ->where(sprintf("%s.%s",$this->tableName,$this->primaryKey), $id);
        if (!empty($this->joinClause)) 
        {
            foreach ($this->joinClause as $key => $val) 
            {
                if (isset($val['2'])) 
                {
                    $this->db->join($val['0'],$val['1'],$val['2']);
                } else
                {
                    $this->db->join($val['0'],$val['1']);
                }
            }
        }
        $q = $this->db->get();
        return $q->row();
    }
    public function insertData($data)
    {
        $this->db->trans_start();
            $this->db->insert($this->tableName,$data);
            $id = $this->db->insert_id();
        $this->db->trans_complete();
        if ($this->db->trans_status() === TRUE) 
        {
            return $id;
        }
    }
    public function updateData($id,$data)
    {
        $this->db->trans_start();
        $this->db->update($this->tableName, $data, [$this->primaryKey => $id]);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }
    public function deleteData($id)
    {
        $this->db->trans_start();
        $this->db->delete($this->tableName, [$this->primaryKey => $id]);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

    public function mergeData($masterData)
    {
        $newData    = [];
        $settings   = $this->eagerLoadSettings;
        $slaveData  = $this->getEagerLoadResult();
        foreach ($masterData as $masterKey => $masterValue) 
        {
            // $masterValue->jabatan = 
        }
    }
    /**
     * @param mixed $tableName
     *
     * @return self
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * @param mixed $primaryKey
     *
     * @return self
     */
    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;

        return $this;
    }

    /**
     * @param mixed $selectedColumns
     *
     * @return self
     */
    public function setSelectedColumns($selectedColumns)
    {
        $this->selectedColumns = $selectedColumns;

        return $this;
    }

    /**
     * @param mixed $searchValue
     *
     * @return self
     */
    public function setSearchValue($searchValue)
    {
        $this->searchValue = $searchValue;

        return $this;
    }

    /**
     * @param mixed $search
     *
     * @return self
     */
    public function setSearch($search)
    {
        foreach ($search as $key => $value) 
        {
            $this->search[$key] = $value;
        }
        return $this;
    }

    /**
     * @param mixed $joinClause
     *
     * @return self
     */
    public function setJoinClause($joinClause)
    {
        foreach ($joinClause as $key => $value) 
        {
            $this->joinClause[] = $value;
        }

        return $this;
    }

    /**
     * @param mixed $debugQuery
     *
     * @return self
     */
    public function setDebugQuery($debugQuery = TRUE)
    {
        $this->debugQuery = $debugQuery;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEagerLoadSettings()
    {
        return $this->eagerLoadSettings;
    }

    /**
     * @param mixed $eagerLoadSettings
     *
     * @return self
     */
    public function setEagerLoadSettings($eagerLoadSettings)
    {
        $this->eagerLoadSettings = $eagerLoadSettings;

        return $this;
    }
}

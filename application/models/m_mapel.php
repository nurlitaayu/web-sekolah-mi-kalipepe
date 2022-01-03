<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_mapel extends CI_Model {

    public function get_datamapel($table)
    {
        
        return $this->db->get($table);
        
        
        
    }

    public function get_id($table,$id)
    {
        
        $this->db->where('id_mapel', $id);
        return $this->db->get($table);            

        
    }

    public function save($table,$data){
        return $this->db->insert($table, $data);
    }

    public function update($table,$id,$data){        
        $this->db->where('id_mapel', $id);
        $this->db->update($table, $data);

    }

    public function delete($table, $id){
        $this->db->where('id_mapel', $id);    
        $this->db->delete($table);
    }

}

/* End of file ModelName.php */

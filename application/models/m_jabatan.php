<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_jabatan extends CI_Model {

    public function get_datajabatan($table)
    {
        
        return $this->db->get($table);            
        
    }

    public function get_id($table,$id)
    {
        
        $this->db->where('id_jabatan', $id);
        return $this->db->get($table);            

        
    }


    public function save($table,$data){
        return $this->db->insert($table, $data);
    }


    public function update($table,$id,$data){        
        $this->db->where('id_jabatan', $id);
        $this->db->update($table, $data);

    }

    public function delete($table, $id){
        $this->db->where('id_jabatan', $id);    
        $this->db->delete($table);
    }

}

/* End of file ModelName.php */

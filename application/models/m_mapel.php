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

    public function add_mapel(){
        $data=[
            "mata_pelajaran"=> $this->input->post('mata_pelajaran')
        ];
        $this->db->insert('tb_mapel', $data);
    }

    public function update($table,$id,$data){        
        $this->db->where('id_mapel', $id);
        $this->db->update($table, $data);

    }

    public function delete_mapel($id){
        
        $this->db->where('id_mapel', $id);
        $this->db->delete('tb_mapel', array('id_mapel' => $id));
       
    }
}

/* End of file ModelName.php */

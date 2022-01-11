<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_guru extends CI_Model {

    public function read_guru(){
        $this->db->select('*');
        $this->db->from('tb_guru');
        $query = $this->db->get();
        return $query->result();
    }
    public function d_jabatan(){
        return $this->db->get('tb_jabatan');
    }
    public function add_guru($data,$table){
        $this->db->insert($table,$data);
        $this->db->insert('tb_guru', $data);
    }
    public function delete_guru($id_guru, $foto_guru){
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('tb_guru', array('id_guru' => $id_guru));
        unlink(FCPATH."/foto/fotoguru/".$foto_guru);
    }
    public function update_guru($id_guru,$foto_guru){
        $this->db->where('id_guru',$id_guru);
        $this->db->update('tb_guru', array('id_guru' => $id_guru));
        unlink(FCPATH."/foto/fotoguru/".$foto_guru);
    }

    

}

/* End of file ModelName.php */

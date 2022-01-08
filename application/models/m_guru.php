<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_guru extends CI_Model {

    public function get_dataguru($table)
    {
        
        return $this->db->get($table);
        
        
        
    }

    public function proses_tambahdata(){
        $data = [
            "nama_guru"=>$this->input->post('nama_guru'),
            "nip"=>$this->input->post('nip'),
            "tempat_lahir"=>$this->input->post('tempat_lahir'),
            "tgl_lahir"=>$this->input->post('tgl_lahir'),
            "id_jabatan"=>$this->input->post('id_jabatan'),
            "pendidikan"=>$this->input->post('pendidikan'),
            "id_mapel"=>$this->input->post('id_mapel')
            
        ];
        $this->db->insert('tb_guru', $data);
        
    }

}

/* End of file ModelName.php */

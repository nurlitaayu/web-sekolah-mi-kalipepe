<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelName extends CI_Model {

    public function lists()
    {
        $this->db->select('*');
        $this->db->from('tb_guru');
        $this->db->order_by('id_guru', 'desk');
        return $this->db->get()->result();
        
        
        
    }

}

/* End of file ModelName.php */

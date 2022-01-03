<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_mapel extends CI_Model {

    public function get_datamapel($table)
    {
        
        return $this->db->get($table);
        
        
        
    }

}

/* End of file ModelName.php */

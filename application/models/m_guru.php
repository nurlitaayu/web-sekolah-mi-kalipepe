<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class m_guru extends CI_Model {

    public function get_dataguru($table)
    {
        
        return $this->db->get($table);
        
        
        
    }

}

/* End of file ModelName.php */

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelName extends CI_Model {

    public function lists()
    {
        $this->db->select('field1, field2');
        
    }

}

/* End of file ModelName.php */

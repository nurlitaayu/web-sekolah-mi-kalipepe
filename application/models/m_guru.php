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
    public function add_guru(){
        $foto_guru 		= $this->upload->data();
        $foto_guru 		= $foto_guru['file_name'];
        $nama_guru 		= $this->input->post('nama_guru', TRUE);
        $nip 			= $this->input->post('nip', TRUE);
        $tempat_lahir 	= $this->input->post('tempat_lahir', TRUE);
        $tgl_lahir 		= $this->input->post('tgl_lahir', TRUE);
        $id_jabatan 	= $this->input->post('id_jabatan', TRUE);
        $pendidikan 	= $this->input->post('pendidikan', TRUE);

        $data = array(
            'nama_guru' => $nama_guru,
            'nip' => $nip,
            'tempat_lahir' => $tempat_lahir,
            'tgl_lahir' => $tgl_lahir,
            'id_jabatan' => $id_jabatan,
            'pendidikan' => $pendidikan,
            'foto_guru' => $foto_guru
        );
        $this->db->insert('tb_guru', $data);
    }
    public function delete_guru($id_guru, $foto_guru){
        $this->db->where('id_guru', $id_guru);
        $this->db->delete('tb_guru', array('id_guru' => $id_guru));
        unlink(FCPATH."/foto/fotoguru/".$foto_guru);
    }
    public function edit_guru($id,$data){
            $this->db->where('id_guru',$id);
            $this->db->update('tb_guru', $data);
    }
    // public function edit_guru_tanpafoto($id,$data){
            
    //         $this->db->where('id_guru',$id);
    //         $this->db->update('tb_guru', $data);

    // }

    

}

/* End of file ModelName.php */

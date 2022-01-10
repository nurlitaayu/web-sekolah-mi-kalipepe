<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_guru','', TRUE);
		$this->load->helper('url');			
	}

	public function index()	{
		$data['guru'] = $this->m_guru->read_guru();
		$data['jabatan'] = $this->m_guru->d_jabatan()->result();
		$this->load->view('admin/v_dataguru',$data);

	}
	public function tambah_guru(){
		$config['upload_path']          = './assets/foto/fotoguru';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

<<<<<<< HEAD
        if ( ! $this->upload->do_upload('foto_guru')){
            
            print_r($this->upload->display_errors());
            die;
        }else{
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
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            	Data Berhasil Disimpan!</div>');
            redirect('dataguru');
        }
    }
    public function hapus_guru(){
        // $where = array ('id_guru' => $id);

        $id_guru = $this->input->post('id_guru');
        $foto_guru = $this->input->post('foto_guru');
        
        $this->m_guru->delete_guru($id_guru, $foto_guru);

        redirect ('dataguru');

    }
=======
=======
>>>>>>> parent of 50b9af8 (#crud data guru)
=======
>>>>>>> parent of 50b9af8 (#crud data guru)
=======
>>>>>>> parent of 50b9af8 (#crud data guru)
	public function tambah(){
		$data['title']='siswa';
		
	}
>>>>>>> parent of 50b9af8 (#crud data guru)
}
        
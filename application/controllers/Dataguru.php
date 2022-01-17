<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_guru','', TRUE);
		$this->load->helper('url');

        if($this->session->userdata('status') != "login"){
            redirect(base_url("login"));
        }
	}

	public function index()	{
		$data['guru'] = $this->m_guru->read_guru();
		$data['jabatan'] = $this->m_guru->d_jabatan()->result();
		$this->load->view('admin/v_dataguru',$data);

	}
	public function tambah_guru(){
		$config['upload_path']          = './assets/foto/fotoguru';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('foto_guru')){
            $this->m_guru->add_guru();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('dataguru');
        }else{
           
            print_r($this->upload->display_errors());
            die;
        }
    }
    public function hapus_guru($id,$foto){

        $id_guru = $id;
        $foto_guru = $foto;
        
        $this->m_guru->delete_guru($id_guru, $foto_guru);

        redirect ('dataguru');

    }

    public function edit_guru(){

        $id= $this->input->post('id');
        $config['upload_path']          = './assets/foto/fotoguru';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 5128;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

            $nama_guru 		= $this->input->post('nama_guru', TRUE);
            $nip 			= $this->input->post('nip', TRUE);
            $tempat_lahir 	= $this->input->post('tempat_lahir', TRUE);
            $tgl_lahir 		= $this->input->post('tgl_lahir', TRUE);
            $id_jabatan 	= $this->input->post('id_jabatan', TRUE);
            $pendidikan 	= $this->input->post('pendidikan', TRUE);


        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ($this->upload->do_upload('foto_guru')){
            $foto_guru 		= $this->upload->data();
            $foto_guru 		= $foto_guru['file_name'];
            $data = array(
            	'nama_guru' => $nama_guru,
            	'nip' => $nip,
            	'tempat_lahir' => $tempat_lahir,
            	'tgl_lahir' => $tgl_lahir,
            	'id_jabatan' => $id_jabatan,
            	'pendidikan' => $pendidikan,
            	'foto_guru' => $foto_guru
            );
            
            $old_image = $data['id_guru']['foto_guru'];
            if ($old_image != null){
                unlink(FCPATH . 'assets/foto/fotoguru/' . $old_image);
            }
            
            // $new_image = $this->upload->data('file_name');
            // $this->db->set('foto_guru',$new_image);


            $this->m_guru->edit_guru($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('dataguru');
            
            
        }else{
           
            $data = array(
            	'nama_guru' => $nama_guru,
            	'nip' => $nip,
            	'tempat_lahir' => $tempat_lahir,
            	'tgl_lahir' => $tgl_lahir,
            	'id_jabatan' => $id_jabatan,
            	'pendidikan' => $pendidikan,
            	
            );

            $this->m_guru->edit_guru($id,$data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('dataguru');
        }
       
        
    }
}
        
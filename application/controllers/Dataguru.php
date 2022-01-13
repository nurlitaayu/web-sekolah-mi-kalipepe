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
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ( ! $this->upload->do_upload('foto_guru')){
            
            print_r($this->upload->display_errors());
            die;
        }else{
           $this->m_guru->add_guru();
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('dataguru');
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
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ( ! $this->upload->do_upload('foto_guru')){
            
            $this->m_guru->edit_guru_tanpafoto($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('dataguru');
            
        }else{
           $this->m_guru->edit_guru($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            berhasil di simpan
          </div>');
            redirect('dataguru');
        }
       
        // $data['tb_guru']=$this->m_guru->ambil_guru($id);

    //     $id_guru = $id;
    //     $foto_guru = $foto;
        
    //     $this->m_guru->update_guru($id_guru,$foto_guru);
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
    //     Data Berhasil Di Rubah!
    //     </div>');
    // redirect('dataguru');
    }
}
        
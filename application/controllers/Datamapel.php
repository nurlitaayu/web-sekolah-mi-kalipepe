<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mapel');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		
	}

	public function index()
	{
		$data = array(
			'title'	=> 'mi muhammadiyah kalipepe',
			'title2'=> 'Mata Pelajaran',
			'mapel'	=>  $this->m_mapel->get_datamapel('tb_mapel')->result(),
			'isi'	=> 'admin/v_mapel'		
			);
		$this->load->view('admin/v_mapel',$data,FALSE);
	}


	public function simpan(){
	
		$this->m_mapel->add_mapel();
		redirect('datamapel');
		
	}
	public function hapus_mapel($id){

        
        $this->m_mapel->delete_mapel($id);
        redirect ('datamapel');

    }

	public function edit_mapel(){
		$id= $this->input->post('id');
		$mata_pelajaran		= $this->input->post('mata_pelajaran', TRUE);
		$data = array(
			'mata_pelajaran' => $mata_pelajaran
			
			
		);
		
		$this->m_mapel->edit_mapel($id,$data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
		berhasil di simpan
	  </div>');
		redirect('datamapel');
	}
}

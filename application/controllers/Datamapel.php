<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamapel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_mapel');
		
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

	public function edit_guru(){
	}
}

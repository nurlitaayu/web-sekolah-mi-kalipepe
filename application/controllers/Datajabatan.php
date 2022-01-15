<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataJabatan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jabatan');
	}

	public function index()	{
		$data = array(
			'title'	=> 'mi muhammadiyah kalipepe',
			'title2'=> 'data jabatan',
			'jabatan'	=>  $this->m_jabatan->get_datajabatan('tb_jabatan')->result(),
			'isi'	=> 'admin/v_datajabatan'		 
		);
		$this->load->view('admin/v_datajabatan',$data);
	}

	public function simpan(){
	
		$this->m_jabatan->add_jabatan();
		redirect('datajabatan');
		
	}

	public function delete($id){
		$this->m_jabatan->delete($id);
        redirect ('datajabatan');		
	}
}


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
		$mata_pelajaran = $this->input->post('mata_pelajaran');
		$data = array(
			'mata_pelajaran' => $mata_pelajaran
		);
		return $this->m_mapel->save('tb_mapel', $data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamapel extends CI_Controller {

	public function index()
	{
		$data = array(
			'title'	=> 'mi muhammadiyah kalipepe',
			'title2'=> 'Mata Pelajaran',
			'isi'	=> 'admin/v_mapel'		
			);
		$this->load->view('admin/v_mapel',$data,FALSE);
	}
}

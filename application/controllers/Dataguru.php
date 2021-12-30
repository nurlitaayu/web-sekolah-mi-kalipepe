<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller {

	public function index()	{
		$data = array(
			'title'	=> 'mi muhammadiyah kalipepe',
			'title2'=> 'data guru',
			//'mapel'	=> $this->m_mapel->lists(),
			'isi'	=> 'admin/v_dataguru'		
		);
		$this->load->view('admin/v_dataguru');
	}
}

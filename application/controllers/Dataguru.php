<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_guru');
		
	}

	public function simpan(){
		return "saya dari fungsi simpan"; 
	}

	public function index()	{
		
		$data = array(
			'title'	=> 'mi muhammadiyah kalipepe',
			'title2'=> 'data guru',
			'guru'	=>  $this->m_guru->get_dataguru('tb_guru')->result(),
			'isi'	=> 'admin/v_dataguru'		 
		);
		$this->load->view('admin/v_dataguru',$data);
	}
}

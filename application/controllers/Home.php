<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('main_model','', TRUE);
		$this->load->library('pagination');	
		$this->load->helper('url');			
	}

	public function index()	{
		// $data['prestasi'] = $this->main_model->read_post()->result();
		$data['prestasi'] = $this->main_model->getPost(3);
		$sql = 'SELECT id_kategori FROM tb_post WHERE ready = "1" ';
		
		$this->load->view('main',$data, $sql);
	}
	
}

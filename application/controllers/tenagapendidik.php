<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tenagapendidik extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('main_model','', TRUE);
		$this->load->library('pagination');	
		$this->load->helper('url');			
	

	}

	public function index()	{
		$data['guru'] = $this->main_model->getGuru(6);
		$this->load->view('tenaga_pendidik',$data);
	}
}
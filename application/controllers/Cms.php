<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {

	public function index()	{
		$this->load->view('admin/cms/v_listpost');
	}
	public function kategori() {
		$this->load->view('admin/cms/v_kategori');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller {

	public function index()	{
		$this->load->view('admin/v_dataguru');
	}
}
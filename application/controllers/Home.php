<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()	{
		$this->load->view('main');
	}
	
	public function proses_tambahdata(){
		$this->m_guru->proses_tambahdata();
		$this->session->set_flashdata('pesan','<div
			class="alert alert-success" role="alert">
			Data baru berhasil ditambahkan! </div>');
		redirect('v_dataguru');
	}

}

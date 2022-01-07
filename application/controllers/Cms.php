<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('m_cms');
	}

	public function index()	{
		$this->load->view('admin/cms/v_listpost');
	}
	public function pages() {
		$this->load->view('admin/cms/v_page');
	}

	public function kategori() {
		$this->load->view('admin/cms/v_kategori');
	}
	public function tambah_kategori(){
		if ($this->input->is_ajax_request()){
			$this->form_validation->set_rules('kategori', 'Kategori', 'required');
			if($this->form_validation->run() == FALSE){
				$data = array('responce' => 'error', 'message' => validation_errors());
			}else{
				$ajax_data = $this->input->post();
				if ($this->m_cms->tambah_kategori($ajax_data)) {
					$data = array('responce' => 'success', 'message' => 'Kategori berhasil disimpan!');
				}else{
					$data = array('responce' => 'error', 'message' => 'Error bosku!');
				}
			}
			echo json_encode($data);
		}else{
			echo "no ajacasd";
		}
	}
	public function tampil_kategori(){
		if($this->input->is_ajax_request()){
			$posts = $this->m_cms->get_kategori();
			echo json_encode($posts);
		}
	}

}

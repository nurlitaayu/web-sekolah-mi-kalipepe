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
	//Create Controller Kategori
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
	//Read Controller Kategori
	public function tampil_kategori(){
		if($this->input->is_ajax_request()){
			$posts = $this->m_cms->get_kategori();
			echo json_encode($posts);
		}
	}
	//Get Data Update Controller Kategori
	public function edit_kategori(){
		if ($this->input->is_ajax_request()) {
			$edit_id = $this->input->post("edit_id");

			if ($post = $this->m_cms->update_kategori($edit_id)){
				$data = array('responce' => "success", "post" => $post);
			}else{
				$data = array('responce' => "error", 'message' => 'failed');
			}
			echo json_encode($data);
		}
	}
	//Simpan Data Update
	public function simpan_data(){
		if ($this->input->is_ajax_request()){
			$this->form_validation->set_rules('kategori_edit', 'Kategori', 'required');
			if($this->form_validation->run() == FALSE){
				$data = array('responce' => 'error', 'message' => validation_errors());
			}else{
				$data['id_kategori'] = $this->input->post('edit_id');
				$data['kategori'] = $this->input->post('kategori_edit');
				if ($this->m_cms->save_kategori($data)) {
					$data = array('responce' => 'success', 'message' => 'Kategori berhasil diupdate!');
				}else{
					$data = array('responce' => 'error', 'message' => 'Error bosku!');
				}
			}
			echo json_encode($data);
		}else{
			echo "no ajacasd";
		}		
	}
	//Delete Controller Kategori
	public function hapus_kategori(){
		if ($this->input->is_ajax_request()) {
			$del_id = $this->input->post('del_id');

			if ($this->m_cms->delete_kategori($del_id)) {
				$data = array('responce' => "success");
			}else{
				$data = array('responce' => "error");
			}
		}
		echo json_encode($data);
	}

}

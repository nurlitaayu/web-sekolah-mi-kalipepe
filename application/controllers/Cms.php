<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cms extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('m_cms');

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

//Slider
	//Create Carousels
	public function tambah_carousel(){
		$config['upload_path']          = './assets/foto/carousel';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ( ! $this->upload->do_upload('gambar')){
            
            print_r($this->upload->display_errors());
            die;
        }else{
            $gambar 		= $this->upload->data();
            $gambar 		= $gambar['file_name'];
            $headline 	= $this->input->post('headline', TRUE);
            $deskripsi 	= $this->input->post('deskripsi', TRUE);
            $status 		= $this->input->post('status', TRUE);

            $data = array(
            	'gambar' => $gambar,
            	'headline' => $headline,
            	'deskripsi' => $deskripsi,
            	'status' => $status
            );
            $this->db->insert('tb_carousel', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            	Data Berhasil Disimpan!</div>');
            redirect('cms/carousel');
        }
    }
	//Read carousel
	public function carousel()	{
		$data['carousel'] = $this->m_cms->read_carousel();
		$this->load->view('admin/cms/v_slider',$data);
	}
//End Slider Controller

//Profile
	//Read Profile
	public function profile()	{
		// $data['prestasi'] = $this->m_cms->read_prestasi();
		$this->load->view('admin/cms/v_profile');
	}
//End Profile Controller

//Prestasi
	//Create Prestasi
	public function tambah_prestasi(){
		$config['upload_path']          = './assets/foto/fotoprestasi';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ( ! $this->upload->do_upload('foto_post')){
            
            print_r($this->upload->display_errors());
            die;
        }else{
            $foto_post 		= $this->upload->data();
            $foto_post 		= $foto_post['file_name'];
            $judul_post 	= $this->input->post('judul_post', TRUE);
            $isi_post 		= $this->input->post('isi_post', TRUE);
            $id_kategori 	= $this->input->post('id_kategori', TRUE);
            $tanggal_post 	= $this->input->post('tanggal_post', TRUE);

            $data = array(
            	'judul_post' => $judul_post,
            	'isi_post' => $isi_post,
            	'tanggal_post' => $tanggal_post,
            	'id_kategori' => $id_kategori,
            	'foto_post' => $foto_post
            );
            $this->db->insert('tb_post', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            	Data Berhasil Disimpan!</div>');
            redirect('cms/prestasi');
        }
    }
    //Read Prestasi
	public function prestasi()	{
		$data['prestasi'] = $this->m_cms->read_prestasi();
		$this->load->view('admin/cms/v_prestasi',$data);
	}
//End Prestasi Controller

//Post
	//Read Post
	public function index()	{
		$data['post'] = $this->m_cms->read_post();
		$this->load->view('admin/cms/v_listpost',$data);
	}
	//Create Post
	public function tambah_post(){
		$config['upload_path']          = './assets/foto/fotopost';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000000;
        $config['max_width']            = 10000000;
        $config['max_height']           = 10000000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);  

        if ( ! $this->upload->do_upload('foto_post')){
            
            print_r($this->upload->display_errors());
            die;
        }else{
            $foto_post 		= $this->upload->data();
            $foto_post 		= $foto_post['file_name'];
            $judul_post 	= $this->input->post('judul_post', TRUE);
            $isi_post 		= $this->input->post('isi_post', TRUE);
            $id_kategori 	= $this->input->post('id_kategori', TRUE);
            $tanggal_post 	= $this->input->post('tanggal_post', TRUE);

            $data = array(
            	'judul_post' => $judul_post,
            	'isi_post' => $isi_post,
            	'tanggal_post' => $tanggal_post,
            	'id_kategori' => $id_kategori,
            	'foto_post' => $foto_post
            );
            $this->db->insert('tb_post', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
            	Data Berhasil Disimpan!</div>');
            redirect('cms');
        }
    }
//End Kategori Post

//Galeri
	//Read Galeri
	public function galeri()	{
		// $data['prestasi'] = $this->m_cms->read_prestasi();
		$this->load->view('admin/cms/v_galeri');
	}
//End Galeri Controller

//Kategori Kontroller
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
//End Kategori Controller

}

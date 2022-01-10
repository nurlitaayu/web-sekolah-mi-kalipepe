<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataguru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_guru');
		
	}

	// public function simpan(){
		
	// 	$hasil['sukses']=false;
	// 	$hasil['eror']="ada error terjadi";

	// 	return json_encode($hasil); 
	// }

	public function index()	{
		
		$data = array(
			'title'	=> 'mi muhammadiyah kalipepe',
			'title2'=> 'data guru',
			'guru'	=>  $this->m_guru->get_dataguru('tb_guru')->result(),
			'isi'	=> 'admin/v_dataguru'		 
		);
		$this->load->view('admin/v_dataguru',$data);
	}

	public function tambah(){
		$data = [
           $nama= "nama_guru"=>$this->input->post('nama'),
            "nip"=>$this->input->post('nip'),
            "tempat_lahir"=>$this->input->post('tempatlahir'),
            "tgl_lahir"=>$this->input->post('tgllahir'),
            "id_jabatan"=>$this->input->post('jabatan'),
            "pendidikan"=>$this->input->post('pendidikan'),
            "id_mapel"=>$this->input->post('mapel')
            
        ];
		
		'nama' => $nama;
		nip
		tempatlahir
		tgllahir
		jabatan
		pendidikan
		mapel

	}
}

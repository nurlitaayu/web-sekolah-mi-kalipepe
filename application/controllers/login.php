<?php 

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');

	}

	//load view login.php
	function index(){

		if($this->session->userdata('status') == "login"){
			redirect(base_url("welcome"));
		}else{
			$this->load->view('login');
		}
		
	}

	//proses login
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'user_name' => $username,
			'user_password' => $password
			);
		$cek = $this->m_login->cek_login("user_login",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url("welcome"));
		}else{
			echo "Username dan Password salah!!";
		}
	}

	//controller logout
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
} 
?>
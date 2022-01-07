<?php 
class M_cms extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function tambah_kategori($data){
		return $this->db->insert('tb_kategori', $data);
	}
	public function get_kategori(){
		$query = $this->db->get('tb_kategori');
		if (count($query->result()) > 0 ) {
			return $query->result();
		}
	}
}

 ?>
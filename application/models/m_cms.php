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
	public function update_kategori($id){
		$this->db->select("*");
		$this->db->from("tb_kategori");
		$this->db->where("id_kategori", $id);
		$query = $this->db->get();
		if (count($query->result()) > 0) {
			return $query->row();
		}
	}
	public function save_kategori($data){
		return $this->db->update('tb_kategori', $data, array('id_kategori' => $data['id_kategori']));
	}
	public function delete_kategori($id){
		return $this->db->delete('tb_kategori', array('id_kategori' => $id));
	}
}

 ?>
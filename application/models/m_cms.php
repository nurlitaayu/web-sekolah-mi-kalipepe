<?php 
class M_cms extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
//model carousel
    public function read_carousel(){
    	$this->db->select('*');
        $this->db->from('tb_carousel');
        $query = $this->db->get();
        return $query->result();
    }
//End carousel

//model Prestasi
	public function add_prestasi($data,$table){
        $this->db->insert($table,$data);
        $this->db->insert('tb_post', $data);
    }
    public function read_prestasi(){
    	$this->db->select('*');
        $this->db->from('tb_post');
        $this->db->where('id_kategori', '2');
        $this->db->order_by("id_post", "desc");
        $query = $this->db->get();
        return $query->result();
    }
    public function delete_prestasi($id_post, $foto){
        $this->db->where('id_post', $id_post);
        $this->db->delete('tb_post', array('id_post' => $id_post));
        unlink(FCPATH."/foto/fotoprestasi/".$foto);
    }
//End model Prestasi

//model galeri
	public function add_galeri($data,$table){
        $this->db->insert($table,$data);
        $this->db->insert('tb_galeri', $data);
    }
    public function read_galeri(){
    	$this->db->select('*');
        $this->db->from('tb_galeri');
        // $this->db->where('id_kategori', '3');
        $this->db->order_by("id_galeri", "desc");
        $query = $this->db->get();
        return $query->result();
    }

	public function delete_galeri($id_galeri, $gambar){
        $this->db->where('id_galeri', $id_galeri);
        $this->db->delete('tb_galeri', array('id_galeri' => $id_galeri));
        unlink(FCPATH."/foto/fotogaleri/".$gambar);
    }
//End model galeri

//model Post
	public function add_post($data,$table){
        $this->db->insert($table,$data);
        $this->db->insert('tb_post', $data);
    }
    public function read_post(){
    	$this->db->select('*');
        $this->db->from('tb_post');
        $this->db->where('id_kategori', '1');
        $this->db->order_by("id_post", "desc");
        $query = $this->db->get();
        return $query->result();
    }
//End model Post

//model Kategori
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
//end model Kategori

 ?>
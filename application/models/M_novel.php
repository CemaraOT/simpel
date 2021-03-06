<?php
class M_novel extends CI_Model {
    //property
	private $id_novel;
	private $gambar;
	private $judul;
	private $stok;
	private $deskripsi;
	private $penulis;
	
    //setter
	public function set_id_novel($value) {
        $this->id_novel = $value; }
	public function set_gambar($value) {
        $this->gambar = $value; }
	public function set_judul($value) {
        $this->judul = $value; }
	public function set_stok($value) {
        $this->stok = $value; }
	public function set_deskripsi($value) {
        $this->deskripsi = $value; }
	public function set_penulis($value) {
        $this->penulis = $value; }
		
    //getter
	public function get_id_novel() {
        return $this->id_novel; }
	public function get_gambar() {
        return $this->gambar; }
	public function get_judul() {
        return $this->judul; }
	public function get_stok() {
        return $this->stok; }
	public function get_deskripsi() {
        return $this->deskripsi; }
	public function get_penulis() {
        return $this->penulis; }
		
	//query
	public function tampil_novel() {
        $sql = "select * from tbl_novel order by id_novel desc";
        return $this->db->query($sql);
    }
	
	public function tampil_novel_desc_limit_1() {
        $sql = "select * from tbl_novel order by id_novel desc limit 1";
        return $this->db->query($sql);
    }
	
	public function tampil_novel_by_id_novel() {
        $sql = "select * from tbl_novel where id_novel = '".$this->get_id_novel()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_novel_by_id($id) {
        $sql = "select * from tbl_novel where id_novel = '".$id."'";
        return $this->db->query($sql);
    }
	
	public function tampil_novel_by_judul_or_deskripsi() {
        $sql = "select * from tbl_novel where judul like '%".$this->get_judul()."%' or deskripsi like '%".$this->get_deskripsi()."%'";
        return $this->db->query($sql);
    }
	
	public function tambah_novel() {
        $sql = "insert into tbl_novel (judul,deskripsi,stok,penulis)
					values
					('".$this->get_judul()."','".$this->get_deskripsi()."','".$this->get_stok()."','".$this->get_penulis()."')";
        return $this->db->query($sql);
    }
	
	public function ubah_novel() {
		$sql = "update tbl_novel set
				judul = '".$this->get_judul()."',
				deskripsi = '".$this->get_deskripsi()."',
				stok = '".$this->get_stok()."',
				penulis = '".$this->get_penulis()."'
				where
				id_novel = '".$this->get_id_novel()."'";
		return $this->db->query($sql);
	}
	
	public function ubah_stok() {
		$sql = "update tbl_novel set
				stok = '".$this->get_stok()."'
				where
				id_novel = '".$this->get_id_novel()."'";
		return $this->db->query($sql);
	}
	
	public function ubah_gambar_novel() {
		$sql = "update tbl_novel set
				gambar = '".$this->get_gambar()."'
				where
				id_novel = '".$this->get_id_novel()."'";
		return $this->db->query($sql);
	}
	
	public function hapus_novel() {
		$sql = "delete from tbl_novel where id_novel = '".$this->get_id_novel()."'";
		return $this->db->query($sql);
	}
}
?>
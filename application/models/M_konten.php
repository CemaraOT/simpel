<?php
class M_konten extends CI_Model {
    //property
	private $id_konten;
	private $gambar;
	private $judul;
	private $deskripsi;
	
    //setter
	public function set_id_konten($value) {
        $this->id_konten = $value; }
	public function set_gambar($value) {
        $this->gambar = $value; }
	public function set_judul($value) {
        $this->judul = $value; }
	public function set_deskripsi($value) {
        $this->deskripsi = $value; }
		
    //getter
	public function get_id_konten() {
        return $this->id_konten; }
	public function get_gambar() {
        return $this->gambar; }
	public function get_judul() {
        return $this->judul; }
	public function get_deskripsi() {
        return $this->deskripsi; }
		
	//query
	public function tampil_konten() {
        $sql = "select * from tbl_konten";
        return $this->db->query($sql);
    }
	
	public function tampil_konten_by_id_konten() {
        $sql = "select * from tbl_konten where id_konten = '".$this->get_id_konten()."'";
        return $this->db->query($sql);
    }

	public function ubah_konten() {
		$sql = "update tbl_konten set
				judul = '".$this->get_judul()."',
				deskripsi = '".$this->get_deskripsi()."',
				gambar = '".$this->get_gambar()."'
				where
				id_konten = '".$this->get_id_konten()."'";
		return $this->db->query($sql);
	}
}
?>
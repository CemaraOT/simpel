<?php
class M_banner extends CI_Model {
    //property
	private $id_banner;
	private $gambar;
	
    //setter
	public function set_id_banner($value) {
        $this->id_banner = $value; }
	public function set_gambar($value) {
        $this->gambar = $value; }
		
    //getter
	public function get_id_banner() {
        return $this->id_banner; }
	public function get_gambar() {
        return $this->gambar; }
		
	//query
	public function tampil_banner() {
        $sql = "select * from tbl_banner";
        return $this->db->query($sql);
    }
	
	public function tampil_banner_by_id_banner() {
        $sql = "select * from tbl_banner where id_banner = '".$this->get_id_banner()."'";
        return $this->db->query($sql);
    }

	public function ubah_banner() {
		$sql = "update tbl_banner set
				gambar = '".$this->get_gambar()."'
				where
				id_banner = '".$this->get_id_banner()."'";
		return $this->db->query($sql);
	}
}
?>
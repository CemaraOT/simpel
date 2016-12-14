<?php
class M_peminjaman extends CI_Model {
    //property
	private $id_peminjaman;
	private $id_novel;
	private $id_user;
	private $tgl_pinjam;
	private $tgl_kembali;
	private $status;
	
    //setter
	public function set_id_peminjaman($value) {
        $this->id_peminjaman = $value; }
	public function set_id_novel($value) {
        $this->id_novel = $value; }
	public function set_id_user($value) {
        $this->id_user = $value; }
	public function set_tgl_pinjam($value) {
        $this->tgl_pinjam = $value; }
	public function set_tgl_kembali($value) {
        $this->tgl_kembali = $value; }
	public function set_status($value) {
        $this->status = $value; }
		
    //getter
	public function get_id_peminjaman() {
        return $this->id_peminjaman; }
	public function get_id_novel() {
        return $this->id_novel; }
	public function get_id_user() {
        return $this->id_user; }
	public function get_tgl_pinjam() {
        return $this->tgl_pinjam; }
	public function get_tgl_kembali() {
        return $this->tgl_kembali; }
	public function get_status() {
        return $this->status; }
		
	//query
	public function tampil_peminjaman() {
        $sql = "select * from tbl_peminjaman order by id_peminjaman desc";
        return $this->db->query($sql);
    }

	public function tampil_peminjaman_by_id_peminjaman() {
        $sql = "select * from tbl_peminjaman where id_peminjaman = '".$this->get_id_peminjaman()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_peminjaman() {
        $sql = "insert into tbl_novel (id_novel,id_user,tgl_pinjam,tgl_kembali,jenis_kelamin)
					values
					('".$this->get_id_novel()."','".$this->get_id_user()."','".$this->get_tgl_pinjam()."','".$this->get_tgl_kembali()."','".$this->get_jenis_kelamin()."')";
        return $this->db->query($sql);
    }
}
?>
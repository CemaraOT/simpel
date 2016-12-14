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
        $sql = "select * from tbl_peminjaman
				inner join tbl_novel on tbl_novel.id_novel = tbl_peminjaman.id_novel
				inner join tbl_user on tbl_user.id_user = tbl_peminjaman.id_user
				order by tbl_peminjaman.id_peminjaman desc";
        return $this->db->query($sql);
    }

	public function tampil_peminjaman_by_id_peminjaman() {
        $sql = "select * from tbl_peminjaman where id_peminjaman = '".$this->get_id_peminjaman()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_peminjaman_by_tgl_kembali_null() {
        $sql = "select * from tbl_peminjaman
				inner join tbl_novel on tbl_novel.id_novel = tbl_peminjaman.id_novel
				inner join tbl_user on tbl_user.id_user = tbl_peminjaman.id_user
				where tbl_peminjaman.tgl_kembali is NULL";
        return $this->db->query($sql);
    }
	
	public function tampil_peminjaman_by_id_user() {
        $sql = "select * from tbl_peminjaman
				inner join tbl_novel on tbl_novel.id_novel = tbl_peminjaman.id_novel
				inner join tbl_user on tbl_user.id_user = tbl_peminjaman.id_user
				where tbl_peminjaman.tgl_kembali is NULL
				and tbl_peminjaman.id_user = '".$this->get_id_user()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_peminjaman_by_id_user_id_novel_tgl_kembali_null() {
        $sql = "select * from tbl_peminjaman
				inner join tbl_novel on tbl_novel.id_novel = tbl_peminjaman.id_novel
				inner join tbl_user on tbl_user.id_user = tbl_peminjaman.id_user
				where tbl_peminjaman.tgl_kembali is NULL
				and tbl_peminjaman.id_user = '".$this->get_id_user()."'
				and tbl_peminjaman.id_novel = '".$this->get_id_novel()."'";
        return $this->db->query($sql);
    }
	
	public function tampil_terpopuler() {
        $sql = "select *, count(tbl_peminjaman.id_novel) as jumlah from tbl_peminjaman
				inner join tbl_novel on tbl_novel.id_novel = tbl_peminjaman.id_novel
				inner join tbl_user on tbl_user.id_user = tbl_peminjaman.id_user
				group by tbl_peminjaman.id_novel
				order by jumlah desc limit 3";
        return $this->db->query($sql);
    }
	
	public function peminjaman() {
        $sql = "insert into tbl_peminjaman (id_novel,id_user,tgl_pinjam)
					values
					('".$this->get_id_novel()."','".$this->get_id_user()."','".$this->get_tgl_pinjam()."')";
        return $this->db->query($sql);
    }
	
	public function pengembalian() {
        $sql = "update tbl_peminjaman set
				tgl_kembali = '".$this->get_tgl_kembali()."'
				where
				id_novel = '".$this->get_id_novel()."'
				and id_user = '".$this->get_id_user()."'
				and tgl_kembali is NULL";
        return $this->db->query($sql);
    }
}
?>
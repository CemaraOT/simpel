<?php
class M_user extends CI_Model {
    //property
	private $id_user;
	private $nama;
	private $alamat;
	private $email;
	private $no_telp;
	private $jenis_kelamin;
	
    //setter
	public function set_id_user($value) {
        $this->id_user = $value; }
	public function set_nama($value) {
        $this->nama = $value; }
	public function set_alamat($value) {
        $this->alamat = $value; }
	public function set_email($value) {
        $this->email = $value; }
	public function set_no_telp($value) {
        $this->no_telp = $value; }
	public function set_jenis_kelamin($value) {
        $this->jenis_kelamin = $value; }
		
    //getter
	public function get_id_user() {
        return $this->id_user; }
	public function get_nama() {
        return $this->nama; }
	public function get_alamat() {
        return $this->alamat; }
	public function get_email() {
        return $this->email; }
	public function get_no_telp() {
        return $this->no_telp; }
	public function get_jenis_kelamin() {
        return $this->jenis_kelamin; }
		
	//query
	public function tampil_user() {
        $sql = "select * from tbl_user order by id_user desc";
        return $this->db->query($sql);
    }
	
	public function tampil_user_desc_limit_1() {
        $sql = "select * from tbl_user order by id_user desc limit 1";
        return $this->db->query($sql);
    }

	public function tampil_user_by_id_user() {
        $sql = "select * from tbl_user where id_user = '".$this->get_id_user()."'";
        return $this->db->query($sql);
    }
	
	public function tambah_user() {
        $sql = "insert into tbl_user (nama,alamat,email,no_telp,jenis_kelamin)
					values
					('".$this->get_nama()."','".$this->get_alamat()."','".$this->get_email()."','".$this->get_no_telp()."','".$this->get_jenis_kelamin()."')";
        return $this->db->query($sql);
    }
	
	public function hapus_user() {
        $sql = "delete from tbl_user where id_user = '".$this->get_id_user()."'";
        return $this->db->query($sql);
    }
}
?>
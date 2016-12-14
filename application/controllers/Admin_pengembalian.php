<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pengembalian extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_novel');
		$this->load->model('m_peminjaman');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_pengembalian');
	}
	
	public function ambil_novel()
	{
		echo "<option selected disabled>--Pilih Judul Novel--</option>";
		$this->m_peminjaman->set_id_user($this->uri->segment(3));
		$query = $this->m_peminjaman->tampil_peminjaman_by_id_user();
		foreach($query->result() as $row){
			echo "<option value=".$row->id_novel.">".$row->judul."</option>";
		}
	}
	
	public function pengembalian()
	{
		$this->m_novel->set_id_novel($this->input->post('id_novel'));
		$query = $this->m_novel->tampil_novel_by_id_novel();
		if($query->num_rows()){
			$row = $query->row();
			$stok = $row->stok + 1;
			$this->m_novel->set_stok($stok);
			$this->m_novel->ubah_stok();
		}
		$this->m_peminjaman->set_id_user($this->input->post('id_user'));
		$this->m_peminjaman->set_id_novel($this->input->post('id_novel'));
		$this->m_peminjaman->set_tgl_kembali(date('Y-m-d',strtotime($this->input->post('tgl_kembali'))));
		$query = $this->m_peminjaman->tampil_peminjaman_by_id_user_id_novel_tgl_kembali_null();
		if($query->num_rows()){
			$this->m_peminjaman->pengembalian();
		}
		$this->session->set_flashdata('success', 'Novel berhasil disimpan.');
		redirect(site_url().'admin_pengembalian');
	}
}

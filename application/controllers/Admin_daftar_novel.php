<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_daftar_novel extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_novel');
		$this->load->model('m_peminjaman');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_daftar_tersedia');
	}
	
	public function tersedia()
	{
		if($this->uri->segment(3) == 'tambah'){
			$data['judul'] = '';
			$data['deskripsi'] = '';
			$data['gambar'] = '';
			$data['stok'] = '';
			$this->load->view('admin_header');
			$this->load->view('admin_manipulasi_daftar_tersedia',$data);
		}elseif($this->uri->segment(3) == 'ubah'){
			$this->m_novel->set_id_novel($this->uri->segment(4));
			$query = $this->m_novel->tampil_novel_by_id_novel();
			if($query->num_rows()){
				$row = $query->row();
				$data['id_novel'] = $row->id_novel;
				$data['judul'] = $row->judul;
				$data['deskripsi'] = $row->deskripsi;
				$data['gambar'] = $row->gambar;
				$data['stok'] = $row->stok;
			}
			$this->load->view('admin_header');
			$this->load->view('admin_manipulasi_daftar_tersedia',$data);
		}else{
			$this->load->view('admin_header');
			$this->load->view('admin_daftar_tersedia');
		}
	}
	
	public function tambah_tersedia()
	{
		$this->m_novel->set_judul($this->input->post('judul'));
		$this->m_novel->set_deskripsi($this->input->post('deskripsi'));
		$this->m_novel->set_stok($this->input->post('stok'));
		$this->m_novel->tambah_novel();
		
		$query = $this->m_novel->tampil_novel_desc_limit_1();
		if($query->num_rows()){
			$row = $query->row();
			$id_novel = $row->id_novel;
		}
		
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/novel/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		$gambar = $config['file_name']= "novel_".$id_novel.".jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar')){
			$this->m_novel->set_id_novel($id_novel);
			$this->m_novel->set_gambar($gambar);
			$this->m_novel->ubah_gambar_novel();
		}
		
		$this->session->set_flashdata('success', 'Novel berhasil ditambah.');
		redirect(site_url().'admin_daftar_novel/tersedia');
	}
	
	public function ubah_tersedia()
	{
		$id_novel = $this->uri->segment(3);
		$this->m_novel->set_id_novel($id_novel);
		$this->m_novel->set_judul($this->input->post('judul'));
		$this->m_novel->set_deskripsi($this->input->post('deskripsi'));
		$this->m_novel->set_stok($this->input->post('stok'));
		$this->m_novel->ubah_novel();
		
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/novel/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		$gambar = $config['file_name']= "novel_".$id_novel.".jpg";
		$this->upload->initialize($config);	
		if($this->upload->do_upload('gambar')){
			$this->m_novel->set_id_novel($id_novel);
			$this->m_novel->set_gambar($gambar);
			$this->m_novel->ubah_gambar_novel();
		}
		
		$this->session->set_flashdata('success', 'Novel berhasil diubah.');
		redirect(site_url().'admin_daftar_novel/tersedia/ubah/'.$id_novel);
	}
	
	public function hapus_tersedia()
	{
		$this->m_novel->set_id_novel($this->uri->segment(3));
		$query = $this->m_novel->tampil_novel_by_id_novel();
		if($query->num_rows()){
			$row = $query->row();
			$gambar = $row->gambar;
		}
		unlink('assets/img/novel/'.$gambar);
		$this->m_novel->hapus_novel();
		$this->session->set_flashdata('success', 'Novel berhasil dihapus.');
		redirect(site_url().'admin_daftar_novel/tersedia');
	}
	
	public function dipinjam()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_daftar_dipinjam');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_tampilan extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_banner');
		$this->load->model('m_konten');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_tampilan_banner');
	}
	
	public function banner()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_tampilan_banner');
	}
	
	public function konten()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_tampilan_konten');
	}
	
	public function ubah_banner()
	{
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/banner/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		
		$gambar = $config['file_name']= "1.jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar[0]')){
			$this->m_banner->set_id_banner($this->input->post('id_banner[0]'));
			$this->m_banner->set_gambar($gambar);
			$this->m_banner->ubah_banner();	
		}
		
		$gambar = $config['file_name']= "2.jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar[1]')){
			$this->m_banner->set_id_banner($this->input->post('id_banner[1]'));
			$this->m_banner->set_gambar($gambar);
			$this->m_banner->ubah_banner();	
		}
		
		$gambar = $config['file_name']= "3.jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar[2]')){
			$this->m_banner->set_id_banner($this->input->post('id_banner[2]'));
			$this->m_banner->set_gambar($gambar);
			$this->m_banner->ubah_banner();	
		}
		
		$this->session->set_flashdata('success', 'Banner berhasil diubah.');
		redirect(site_url().'admin_tampilan/banner');
	}
	
	public function ubah_konten()
	{
		$this->load->library('upload');
		$config['upload_path'] = './assets/img/konten/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = '5000';
		$config['max_width'] = '5000';
		$config['max_height'] = '5000';
		$config['overwrite'] = TRUE;
		
		$gambar = $config['file_name']= "1.jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar[0]')){
			$this->m_konten->set_id_konten($this->input->post('id_konten[0]'));
			$this->m_konten->set_gambar($gambar);
			$this->m_konten->ubah_gambar_konten();	
		}else{
			$this->m_konten->set_id_konten($this->input->post('id_konten[0]'));
			$this->m_konten->set_judul($this->input->post('judul[0]'));
			$this->m_konten->set_deskripsi($this->input->post('deskripsi[0]'));
			$this->m_konten->ubah_konten();	
		}
		
		$gambar = $config['file_name']= "2.jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar[1]')){
			$this->m_konten->set_id_konten($this->input->post('id_konten[1]'));
			$this->m_konten->set_gambar($gambar);
			$this->m_konten->ubah_gambar_konten();	
		}else{
			$this->m_konten->set_id_konten($this->input->post('id_konten[1]'));
			$this->m_konten->set_judul($this->input->post('judul[1]'));
			$this->m_konten->set_deskripsi($this->input->post('deskripsi[1]'));
			$this->m_konten->ubah_konten();	
		}
		
		$gambar = $config['file_name']= "3.jpg";
		$this->upload->initialize($config);
		if($this->upload->do_upload('gambar[2]')){
			$this->m_konten->set_id_konten($this->input->post('id_konten[2]'));
			$this->m_konten->set_gambar($gambar);
			$this->m_konten->ubah_gambar_konten();	
		}else{
			$this->m_konten->set_id_konten($this->input->post('id_konten[2]'));
			$this->m_konten->set_judul($this->input->post('judul[2]'));
			$this->m_konten->set_deskripsi($this->input->post('deskripsi[2]'));
			$this->m_konten->ubah_konten();	
		}
		
		$this->session->set_flashdata('success', 'konten berhasil diubah.');
		redirect(site_url().'admin_tampilan/konten');
	}
}

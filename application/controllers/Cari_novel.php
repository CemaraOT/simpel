<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cari_novel extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_novel');
    }
	
	public function index()
	{
		$data['tampil_cari'] = $this->m_novel->tampil_novel();
		$this->load->view('header');
		$this->load->view('cari_novel',$data);
	}
	
	public function cari()
	{
		$this->m_novel->set_judul($this->input->post('cari'));
		$this->m_novel->set_deskripsi($this->input->post('cari'));
		$data['tampil_cari'] = $this->m_novel->tampil_novel_by_judul_or_deskripsi();
		$this->load->view('header');
		$this->load->view('cari_novel',$data);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_banner');
		$this->load->model('m_konten');
		$this->load->model('m_novel');
		$this->load->model('m_peminjaman');
    }
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('beranda');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_daftar_novel extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_novel');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_daftar_tersedia');
	}
	
	public function tersedia()
	{
		if($this->uri->segment(3)){
			$this->load->view('admin_header');
			$this->load->view('admin_manipulasi_daftar_tersedia');
		}else{
			$this->load->view('admin_header');
			$this->load->view('admin_daftar_tersedia');
		}
	}
	
	public function dipinjam()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_daftar_dipinjam');
	}
}

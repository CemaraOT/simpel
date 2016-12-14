<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_laporan extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_peminjaman');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_laporan');
	}
}

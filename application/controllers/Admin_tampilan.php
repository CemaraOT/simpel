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
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_manajemen extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_user');
    }
	
	public function index()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_manajemen_admin');
	}
	
	public function admin()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_manajemen_admin');
	}
	
	public function user()
	{
		$this->load->view('admin_header');
		$this->load->view('admin_manajemen_user');
	}
}

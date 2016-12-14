<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_novel extends CI_Controller {

	public function __construct() {
		
        parent::__construct();
		$this->load->model('m_novel');
    }
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('pinjam_novel');
	}
	
	public function pinjam()
	{
		$data['tampil'] = $this->m_novel->tampil_novel_by_id($this->uri->segment(3));
		$this->load->view('header');
		$this->load->view('pinjam_novel',$data);
	}
}

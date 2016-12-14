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
		if($this->uri->segment(3) == 'cetak_kartu'){
			$this->load->view('halaman_cetak_kartu');
		}else{
			$this->load->view('admin_header');
			$this->load->view('admin_manajemen_user');
		}
	}
	
	public function tambah_admin()
	{
		$this->m_admin->set_username($this->input->post('username'));
		$this->m_admin->set_password($this->input->post('password'));
		$query = $this->m_admin->tampil_admin_by_username();
		if($query->num_rows()){
			$this->session->set_flashdata('error', 'Username telah terdaftar, silahkan gunakan username yang lain.');
			redirect(site_url().'admin_manajemen/admin');
		}else{
			$this->m_admin->tambah_admin();
			$this->session->set_flashdata('success', 'Admin berhasil ditambah.');
			redirect(site_url().'admin_manajemen/admin');
		}
	}
	
	public function ubah_admin()
	{
		$this->m_admin->set_username($this->input->post('username'));
		$this->m_admin->set_password($this->input->post('password'));
		$query = $this->m_admin->tampil_admin_by_username();
		if($query->num_rows()){
			$this->session->unset_userdata('password');
			$this->session->set_userdata('password',$this->input->post('password'));
			$this->m_admin->ubah_password();
			$this->session->set_flashdata('success', 'Password berhasil diubah.');
			redirect(site_url().'admin_manajemen/admin');
		}
	}
	
	public function hapus_admin()
	{
		$this->m_admin->set_username($this->uri->segment(3));
		$this->m_admin->hapus_admin();
		$this->session->set_flashdata('success', 'Admin berhasil dihapus.');
		redirect(site_url().'admin_manajemen/admin');
	}
}

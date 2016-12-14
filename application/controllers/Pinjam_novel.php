<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_novel extends CI_Controller {

	public function __construct() {
		
        parent::__construct();
		$this->load->model('m_novel');
		$this->load->model('m_user');
		$this->load->model('m_peminjaman');
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
	
	public function peminjaman()
	{
		$id_novel = $this->input->post('id_novel');
		$cara = $this->input->post('cara');
	
		if($cara == 2){
			$this->m_user->set_nama($this->input->post('nama'));
			$this->m_user->set_alamat($this->input->post('alamat'));
			$this->m_user->set_no_telp($this->input->post('no_telp'));
			$this->m_user->set_email($this->input->post('email'));
			$this->m_user->set_jenis_kelamin($this->input->post('jenis_kelamin'));
			$this->m_user->tambah_user();
			
			$query = $this->m_user->tampil_user_desc_limit_1();
			if($query->num_rows()){
				$row = $query->row();
				$id_user = $row->id_user;
			}
			
			$this->m_novel->set_id_novel($id_novel);
			$query = $this->m_novel->tampil_novel_by_id_novel();
			if($query->num_rows()){
				$row = $query->row();
				$stok = $row->stok - 1;
				$this->m_novel->set_stok($stok);
				$this->m_novel->ubah_stok();
			}
			
			$this->m_peminjaman->set_id_novel($id_novel);
			$this->m_peminjaman->set_id_user($id_user);
			$this->m_peminjaman->set_tgl_pinjam(date('Y-m-d'));
			$this->m_peminjaman->peminjaman();
			$this->session->set_flashdata('success', 'Novel berhasil dibooking, silahkan menuju operator untuk meminjam buku.');
			redirect(site_url().'pinjam_novel/pinjam/'.$id_novel);
		}else{
			$this->m_user->set_id_user($this->input->post('id_user'));
			$query = $this->m_user->tampil_user_by_id_user();
			if($query->num_rows()){
				$row = $query->row();
				$this->m_novel->set_id_novel($id_novel);
				$query2 = $this->m_novel->tampil_novel_by_id_novel();
				if($query2->num_rows()){
					$row2 = $query2->row();
					$stok = $row2->stok - 1;
					$this->m_novel->set_stok($stok);
					$this->m_novel->ubah_stok();
				}
				$this->m_peminjaman->set_id_novel($id_novel);
				$this->m_peminjaman->set_id_user($row->id_user);
				$this->m_peminjaman->set_tgl_pinjam(date('Y-m-d'));
				$this->m_peminjaman->peminjaman();
				$this->session->set_flashdata('success', 'Novel berhasil dibooking, silahkan menuju operator untuk meminjam buku.');
				redirect(site_url().'pinjam_novel/pinjam/'.$id_novel);
			}else{
				$this->session->set_flashdata('error', 'ID User yang anda masukan tidak terdaftar.');
				redirect(site_url().'pinjam_novel/pinjam/'.$id_novel);
			}
		}
	}
	
	public function ambil_id()
	{
		echo '
			<div class="form-group">
				<label>ID User</label>
				<input class="form-control" name="id_user" placeholder="ID User" type="text" />
				<input name="cara" type="hidden" value="1" />
			</div>
		';
	}
	
	public function ambil_register()
	{
		echo '
			<div class="form-group">
				<label>Nama</label>
				<input class="form-control" name="nama" placeholder="Nama" type="text" />
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input class="form-control" name="alamat" placeholder="Alamat" type="text" />
			</div>
			<div class="form-group">
				<label>Nomor Telepon</label>
				<input class="form-control" name="no_telp" placeholder="Nomor Telepon" type="text" />
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" name="email" placeholder="Email" type="email" />
			</div>
			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-control">
					<option selected disabled>--Pilih Jenis Kelamin</option>
					<option value="1">Laki-laki</option>
					<option value="0">Perempuan</option>
				</select>
			</div>
			<input name="cara" type="hidden" value="2" />
		';
	}
}

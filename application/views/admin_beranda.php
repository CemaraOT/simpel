				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Beranda</div>
							</div>
							<div class="content-box-large box-with-header">
								<h3>Hai, <span class="text-muted"><?php echo $this->session->userdata('username'); ?>!</span></h3>
								<h4>Selamat datang di Sistem Informasi Peminjaman Novel (SIMPEL).</h4>
								<hr />
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#aturan1">Aturan 1</a></li>
									<li><a data-toggle="tab" href="#aturan2">Aturan 2</a></li>
									<li><a data-toggle="tab" href="#aturan3">Aturan 3</a></li>
									<li><a data-toggle="tab" href="#aturan4">Aturan 4</a></li>
								</ul>

								<div class="tab-content">
									<div id="aturan1" class="tab-pane fade in active">
										<pre>
PENDAFTARAN USER
	1. User memilih buku novel untuk dipinjam, lakukan register untuk membuat akun
	2. Datang ke petugas untuk :
		a) Dimasukkan data-datanya
		b) Perolehan ID User
		c) Pencetakan kartu anggota
										</pre>
									</div>
									<div id="aturan2" class="tab-pane fade">
										<pre>
PEMINJAMAN NOVEL
	1. Anggota memilih sendiri novel yang akan di pinjam
	2. Mengisi data peminjaman :
		a) Petugas meminta kartu anggota
		b) Petugas mengecek kode novel dalam sistem
		c) Petugas memberikan buku novel
										</pre>
									</div>
									<div id="aturan3" class="tab-pane fade">
										<pre>
PENGEMBALIAN PEMINJAMAN NOVEL
	1. Anggota menunjukkan kartu anggota/menyebutkan ID User
	2. Petugas memasukkan ID User pada sistem
	3. Anggota mengembalikan novel yang dipinjam
	4. Petugas menyimpan tanggal pengembalian
	5. Pengembalian masuk kedalam laporan
										</pre>
									</div>
									<div id="aturan4" class="tab-pane fade">
										<pre>
PENYEDIAAN STOK NOVEL(SUPPLY)
	1. 	Petugas memilih menu daftar novel pilih menu tersedia
	2.  Terdapat tampilan beberapa novel yang sudah terdaftar, pilih tombol ubah
	3.  Ubah jumlah stok yang tersedia
	
LAPORAN CETAK
	1. 	Pilih menu laporan
	2.  Terdapat tampilan semua laporan buku yang sudah kembali dan belum kembali
	3.  Pilih tombol cetak
										</pre>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="copy text-center">
				   Copyright 2016 <a href="<?php echo site_url(); ?>admin_beranda">Sistem Informasi Peminjaman Novel</a>
				</div>
			</div>
		</footer>
	</body>
</html>
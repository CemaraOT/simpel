				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<?php if($this->uri->segment(3) == 'tambah'){ ?>
								<div class="panel-title ">Tambah Buku</div>
								<?php }elseif($this->uri->segment(3) == 'ubah'){ ?>
								<div class="panel-title ">Ubah Buku</div>
								<?php } ?>
							</div>
							<div class="content-box-large box-with-header">
								<div class="panel-body">
									<?php if($this->uri->segment(3) == 'tambah'){ ?>
									<form method="post" action="<?php echo site_url(); ?>admin_daftar_novel/tambah_tersedia" accept-charset="utf-8" enctype="multipart/form-data">
									<?php }elseif($this->uri->segment(3) == 'ubah'){ ?>
									<form method="post" action="<?php echo site_url(); ?>admin_daftar_novel/ubah_tersedia/<?php echo $id_novel; ?>" accept-charset="utf-8" enctype="multipart/form-data">
									<?php } ?>
										<div class="row">
											<div class="col-md-5">
												<?php if($this->uri->segment(3) == 'tambah'){ ?>
												<img class="img-thumbnail center-block" width="200" height="200" src="<?php echo base_url(); ?>assets/img/novel/no-image.png"/>
												<?php }elseif($this->uri->segment(3) == 'ubah'){ ?>
												<?php if($gambar == ''){?>
												<img class="img-thumbnail center-block" width="200" height="200" src="<?php echo base_url(); ?>assets/img/novel/no-image.png"/>
												<?php }else{ ?>
												<img class="img-thumbnail center-block" width="200" height="200" src="<?php echo base_url(); ?>assets/img/novel/<?php echo $gambar; ?>"/>
												<?php } ?>
												<?php } ?>
												<div class="panel panel-default" style="padding:0% 2%; color:grey; font-size:9pt; font-weight:bold;">
													<text>* ukuran gambar harus 1000 x 650 pixel.</text><br/>
													<text>* format .jpg atau .png</text>
												</div>
												<input type="file" name="gambar" class="form-control" />
											</div>
											<div class="col-md-7">
												<div class="form-group">
													<label>Judul</label>
													<input class="form-control" placeholder="Judul" name="judul" type="text" value="<?php echo $judul; ?>">
												</div>
												<div class="form-group">
													<label>Deskripsi</label>
													<textarea class="form-control" rows="3" name="deskripsi"><?php echo $deskripsi; ?></textarea>
												</div>
												<div class="form-group">
													<label>Stok</label>
													<input class="form-control" placeholder="Stok" name="stok" type="number" value="<?php echo $stok; ?>">
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<?php if($this->uri->segment(3) == 'tambah'){ ?>
											<input type="submit" class="btn btn-primary" value="Tambah">
											<?php }elseif($this->uri->segment(3) == 'ubah'){ ?>
											<input type="submit" class="btn btn-primary" value="Ubah">
											<?php } ?>
										</div>
									</form>
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

<script type="text/javascript">
	$(document).ready(function () {
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
	});
</script>
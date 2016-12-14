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
									<form action="">
										<fieldset>
											<div class="row">
												<div class="col-md-5">
													<img class="img-thumbnail center-block" width="200" height="200" src="<?php echo base_url(); ?>assets/img/novel/no-image.png"/>
													<div class="panel panel-default" style="padding:0% 2%; color:grey; font-size:9pt; font-weight:bold;">
														<text>* ukuran gambar harus 1000 x 650 pixel.</text><br/>
														<text>* format .jpg atau .png</text>
													</div>
													<input type="file" name="gambar" class="form-control /">
												</div>
												<div class="col-md-7">
													<div class="form-group">
														<label>Judul</label>
														<input class="form-control" placeholder="Judul" name="judul" type="text">
													</div>
													<div class="form-group">
														<label>Deskripsi</label>
														<textarea class="form-control" rows="3" name="deskripsi"></textarea>
													</div>
													<div class="form-group">
														<label>Stok</label>
														<input class="form-control" placeholder="Stok" name="stok" type="number">
													</div>
												</div>
											</div>
										</fieldset>
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
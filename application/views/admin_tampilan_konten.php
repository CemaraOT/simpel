				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Konten</div>
							</div>
							<div class="content-box-large box-with-header">
								<form method="post" action="<?php echo site_url(); ?>admin_tampilan/ubah_konten" enctype="multipart/form-data">
									<div class="row" style="padding-bottom:3%;">
									<?php
										$i = 2;
										$query = $this->m_konten->tampil_konten();
										foreach($query->result() as $row){
									?>
										<div class="col-md-12">
											<div class="row">
												<div class="col-md-5">
													<img class="img-thumbnail" src="<?php echo site_url(); ?>assets/img/konten/<?php echo $row->gambar?>" />
												</div>
												<div class="col-md-7">
													<div class="form-group">
														<div class="panel panel-default" style="padding:0% 2%; color:grey; font-size:9pt; font-weight:bold;">
															<text>* ukuran gambar harus 500 x 500 pixel.</text><br/>
															<text>* format .jpg atau .png</text>
														</div>
														<input type="file" name="gambar[<?php echo $i; ?>]" class="form-control">
														<input type="hidden" name="id_konten[<?php echo $i; ?>]" value="<?php echo $row->id_konten; ?>">
													</div>
													<div class="form-group">
														<label>Judul</label>
														<input type="text" name="judul[<?php echo $i; ?>]" class="form-control" value="<?php echo $row->judul; ?>" >
													</div>
													<div class="form-group">
														<label>Deskripsi</label>
														<textarea class="form-control" name="deskripsi[<?php echo $i; ?>]" rows="9"><?php echo $row->deskripsi; ?></textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="clearfix"></div>
										<hr />
									<?php
											$i--;
										}
									?>
									</div>
									<div class="modal-footer">
										<button class="btn btn-primary" type="submit"> Simpan</button>
									</div>
								</form>
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
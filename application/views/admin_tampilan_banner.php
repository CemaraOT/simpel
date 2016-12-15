				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Banner</div>
							</div>
							<div class="content-box-large box-with-header">
								<form method="post" action="<?php echo site_url(); ?>admin_tampilan/ubah_banner" enctype="multipart/form-data">
									<div class="row" style="padding-bottom:3%;">
									<?php
										$i = 2;
										$query = $this->m_banner->tampil_banner();
										foreach($query->result() as $row){
									?>
										<div class="col-md-4">
											<div style="min-height:200px;">
												<img class="img-thumbnail" src="<?php echo site_url(); ?>assets/img/banner/<?php echo $row->gambar?>" />
											</div>
											<div class="panel panel-default" style="padding:0% 2%; color:grey; font-size:9pt; font-weight:bold;">
												<text>* ukuran gambar harus 1366 x 500 pixel.</text><br/>
												<text>* format .jpg atau .png</text>
											</div>
											<input type="file" name="gambar_<?php echo $i; ?>" class="form-control">
											<input type="hidden" name="id_banner[<?php echo $i; ?>]" value="<?php echo $row->id_banner; ?>">
										</div>
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
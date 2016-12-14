				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Manajemen Admin</div>
								<div class="panel-options">
									<a href="<?php echo site_url(); ?>admin_manajemen/admin/tambah"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
								</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="content-box-large">
									<div class="panel-body">
										<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
											<thead>
												<tr>
													<th>Username</th>
													<th>Modifikasi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$query = $this->m_admin->tampil_admin();
													foreach($query->result() as $row){
												?>
												<tr>
													<td><?php echo $row->username; ?></td>
													<td>
														<div class="text-center">
															<button type="button" class="btn btn-info btn-circle ubah" style="width:40px; height:40px;"
																title="Ubah" data-toggle="modal" data-target="#modal_ubah" id="ubah_<?php echo $row->username; ?>">
																<i class="glyphicon glyphicon-edit" style="font-size:12pt;"></i>
															</button>
															<button type="button" class="btn btn-danger btn-circle hapus" style="width:40px; height:40px;"
																title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="hapus_<?php echo $row->username; ?>">
																<i class="glyphicon glyphicon-trash" style="font-size:12pt;"></i>
															</button>
														</div>
													</td>
												</tr>
												<?php
													}
												?>
											</tbody>
										</table>
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

<div class="modal fade" id="modal_ubah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" id="form_ubah" enctype="multipart/form-data">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Profil Admin</h4>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal"> Tutup</button>
				</div>
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div class="modal fade" id="modal_konfirmasi">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close" data-dismiss="modal">
					&times;
				</button>
				<h4 class="modal-title">Konfirmasi</h4>
			</div>
			<div class="modal-body">
				<p>Apakah anda yakin ingin menghapus novel ?</p>
				<input type="hidden" name="username" id="username">
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" id="hapus"> Ya</button>
				<button class="btn btn-default" data-dismiss="modal"> Tidak</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		
		$('.hapus').click(function() {
            var id=this.id.substr(6);
            $('#username').val(id);
        });
		
		$('#hapus').click(function() {
			window.location = '<?php echo site_url();?>admin_manajemen/hapus_admin/' + $('#username').val();
		});
		
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
	});
</script>
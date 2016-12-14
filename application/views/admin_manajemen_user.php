				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Manajemen User</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="content-box-large">
									<div class="panel-body">
										<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
											<thead>
												<tr>
													<th>ID User</th>
													<th>Nama</th>
													<th>Modifikasi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$query = $this->m_user->tampil_user();
													foreach($query->result() as $row){
												?>
												<tr>
													<td><?php echo $row->id_user; ?></td>
													<td><?php echo $row->nama; ?></td>
													<td>
														<div class="text-center">
															<div class="text-center">
																<button type="button" class="btn btn-success btn-circle detail" style="width:40px; height:40px;"
																	title="Detail" data-toggle="modal" data-target="#modal_detail" id="detail_<?php echo $row->id_user; ?>">
																	<i class="glyphicon glyphicon-search" style="font-size:12pt;"></i>
																</button>
															</div>
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

<div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" id="form_ubah" enctype="multipart/form-data">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Detail User</h4>
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
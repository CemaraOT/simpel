				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Daftar Novel Dipinjam</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="content-box-large">
									<div class="panel-body">
										<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
											<thead>
												<tr>
													<th>ID</th>
													<th>Gambar</th>
													<th>Judul</th>
													<th>Tanggal Pinjam</th>
													<th>Peminjam</th>
													<th>Modifikasi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$query = $this->m_peminjaman->tampil_peminjaman_by_tgl_kembali_null();
													foreach($query->result() as $row){
												?>
												<tr>
													<td><?php echo $row->id_peminjaman; ?></td>
													<td>
														<img src="<?php echo base_url(); ?>assets/img/novel/<?php echo $row->gambar; ?>" class="img-thumbnail center-block" width="200" height="200"/>
													</td>
													<td><?php echo $row->judul; ?></td>
													<td><?php echo date('d-m-Y',strtotime($row->tgl_pinjam)); ?></td>
													<td><?php echo $row->nama; ?></td>
													<td>
														<div class="text-center">
															<button type="button" class="btn btn-success btn-circle detail" style="width:40px; height:40px;"
																title="Detail" data-toggle="modal" data-target="#modal_detail" id="detail_<?php echo $row->id_peminjaman; ?>">
																<i class="glyphicon glyphicon-search" style="font-size:12pt;"></i>
															</button>
														</div>
													</td>
													<input type="hidden" id="judul_<?php echo $row->id_peminjaman;?>" value="<?php echo $row->judul;?>">
													<input type="hidden" id="deskripsi_<?php echo $row->id_peminjaman;?>" value="<?php echo $row->deskripsi;?>">
													<input type="hidden" id="penulis_<?php echo $row->id_peminjaman;?>" value="<?php echo $row->penulis;?>">
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
					<h4 class="modal-title" id="myModalLabel">Detail</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>ID Novel</label>
						<input type="text" class="form-control" id="id_novel" readonly />
					</div>
					<div class="form-group">
						<label>Judul</label>
						<input type="text" class="form-control" id="judul" readonly />
					</div>
					<div class="form-group">
						<label>Deskripsi</label>
						<textarea rows="10" class="form-control" id="deskripsi" readonly ></textarea>
					</div>
					<div class="form-group">
						<label>Penulis</label>
						<input type="text" class="form-control" id="penulis" readonly />
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" data-dismiss="modal"> Tutup</button>
				</div>
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () {
		$('.detail').click(function() {
			var id=this.id.substr(7);
			$('#id_novel').val(id);
			$('#judul').val($('#judul_' + id).val());
			$('#deskripsi').val($('#deskripsi_' + id).val());
			$('#penulis').val($('#penulis_' + id).val());
		});
	});
</script>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Laporan</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="content-box-large">
									<div class="panel-body">
										<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
											<thead>
												<tr>
													<th>ID Peminjaman</th>
													<th>Judul Novel</th>
													<th>Peminjam</th>
													<th>Tanggal Pinjam</th>
													<th>Tanggal Kembali</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$query = $this->m_peminjaman->tampil_peminjaman();
													foreach($query->result() as $row){
												?>
												<tr>
													<td><?php echo $row->id_peminjaman; ?></td>
													<td><?php echo $row->judul; ?></td>
													<td><?php echo $row->nama; ?></td>
													<td><?php echo date('d F Y',strtotime($row->tgl_pinjam)); ?></td>
													<td><?php if($row->tgl_kembali == NULL){ echo '--'; }else{ echo date('d F Y',strtotime($row->tgl_kembali)); } ?></td>
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
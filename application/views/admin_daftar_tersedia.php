				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Daftar Novel Tersedia</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="content-box-large">
									<div class="panel-body">
										<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
											<thead>
												<tr>
													<th>ID</th>
													<th>Judul</th>
													<th>Modifikasi</th>
												</tr>
											</thead>
											<tbody>
												<?php
													$query = $this->m_novel->tampil_novel();
													foreach($query->result() as $row){
												?>
												<tr>
													<td><?php echo $row->id_novel; ?></td>
													<td><?php echo $row->judul; ?></td>
													<td></td>
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
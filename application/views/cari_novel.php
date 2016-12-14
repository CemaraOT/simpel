		<div class="container-fluid" style="background:rgba(186,212,255,1); border-radius:0px 0px 10px 10px;">
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div id="imaginary_container">
						<form method="post" action="<?php echo site_url(); ?>cari_novel/cari">
							<div class="input-group stylish-input-group">
								<input type="text" class="form-control" name="cari" placeholder="Cari novel" />
								<span class="input-group-addon">
									<button type="submit">
										<span class="glyphicon glyphicon-search"></span>
									</button>  
								</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<?php
					foreach($tampil_cari->result() as $row){
				?>
				<div class="col-md-4 col-xs-12" style="border:1px solid #b1c1db; border-radius:15px; width:31.3333%; margin:1%;">
					<div class="row">
						<div class="col-md-12">
							<img class="img-thumbnail center-block" style="margin-top:5%" src="<?php echo base_url();?>assets/img/novel/<?php echo $row->gambar; ?>" alt="Generic placeholder image" width="200" height="200">
						</div>
						<div class="col-md-12">
							<h4 class="text-center"><b><?php echo $row->judul; ?></b><br><small><?php echo $row->penulis; ?></small></h4>
							
							<p style="text-align:justify;"><?php echo substr($row->deskripsi,0,151); ?></p>
							<p>Status : <span class="badge"><?php if($row->stok <= 0){ echo 'Dipinjam'; }else{ echo 'Tersedia'; } ?></span></p>
							<p class="text-center" ><a class="btn btn-default form-control" href="<?php echo site_url('pinjam_novel/pinjam/'.$row->id_novel); ?>" role="button">Lihat &raquo;</a></p>
						</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class="row">
				<center>
					<nav aria-label="...">
						<ul class="pagination">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</center>
			</div>
		</div>
		<div class="container marketing">
			<hr/>
			<footer>
				<p class="pull-right"><a href="#">Kembali ke atas</a></p>
				<p>Sistem Informasi Peminjaman Novel &copy; 2016.</p>
			</footer>
		</div>
	</body>
</html>
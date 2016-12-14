		<div  class="container">
			<div style="margin-top:150px;" class="row">
			<?php foreach($tampil->result() as $row){?>
				<div class="col-md-4">
					<img class="img-thumbnail center-block"  src="<?php echo base_url();?>assets/img/novel/<?php echo $row->gambar; ?>" alt="Generic placeholder image" width="300" height="300">
				</div>
				<div class="col-md-8">
				<h3><b><?php echo $row->judul; ?></b><br><small><?php echo $row->penulis; ?></small></h3>
					<p style="text-align:justify;"><?php echo$row->deskripsi; ?></p>
					<p>Status : <span class="badge"><?php if($row->stok <= 0){ echo 'Dipinjam'; }else{ echo 'Tersedia'; } ?></span></p>
				
			</div>
			<div class="col-md-4" ></div>
			<div class="col-md-3" style="margin-top:50px;"><a class="btn btn-primary form-control " href="<?php echo site_url('pinjam_novel/pinjam/'.$row->id_novel); ?>" role="button">Pinjam &raquo;</a></div>
			<?php } ?>
			</div>
		</div>
		<div class="container marketing" style="margin-top:100px;">
			<footer>
				<p class="pull-right"><a href="#">Kembali ke atas</a></p>
				<p>Sistem Informasi Peminjaman Novel &copy; 2016.</p>
			</footer>
		</div>
	</body>
</html>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<?php
					$i = 3;
					$query = $this->m_banner->tampil_banner();
					foreach($query->result() as $row){
				?>
					<div class="item <?php if($i%3 == 1){ echo 'active'; } ?>">
					<img src="<?php echo base_url();?>assets/img/banner/<?php echo $row->gambar; ?>" alt="Slide">
					<div class="container">
						<div class="carousel-caption">
							<p><a class="btn btn-lg btn-info" href="#" role="button" style="background:rgba(0,0,0,1); border:none; font-family:cursive">Coming Soon</a></p>
						</div>
					</div>
				</div>
				<?php
						$i--;
					}
				?>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	
		<div class="container marketing">
			<center><h2 style="font-family:cursive">Novel Terpopuler</h2></center>
			<hr class="featurette-divider">
			<div class="row">
				<?php
					$query = $this->m_peminjaman->tampil_terpopuler();
					foreach($query->result() as $row){
				?>
				<div class="col-lg-4">
					<div style="min-height:350px;">
						<img class="img-thumbnail" src="<?php echo base_url();?>assets/img/novel/<?php echo $row->gambar; ?>" alt="Generic placeholder image" width="200" height="200">
						<h2><?php echo $row->judul; ?></h2>
						<p><?php echo substr($row->deskripsi,0,250); ?>...</p>
					</div>
					<p><a class="btn btn-default" href="<?php echo site_url(); ?>pinjam_novel/pinjam/<?php echo $row->id_novel; ?>" role="button">Lihat &raquo;</a></p>
				</div>
				<?php
					}
				?>
			</div>
			<hr class="featurette-divider">
			<?php
				$i = 0;
				$query = $this->m_konten->tampil_konten();
				foreach($query->result() as $row){
			?>
			<div class="row featurette">
				<div class="col-md-7 <?php if($i%2==1) { echo 'col-md-push-5'; }?>">
					<h2 class="featurette-heading"><?php echo $row->judul; ?></h2>
					<p class="lead"><?php echo $row->deskripsi; ?></p>
				</div>
				<div class="col-md-5 <?php if($i%2==1) { echo 'col-md-pull-7'; }?>">
					<img class="featurette-image img-responsive center-block" src="<?php echo base_url();?>assets/img/konten/<?php echo $row->gambar; ?>" alt="Generic placeholder image">
				</div>
			</div>
			<hr class="featurette-divider">
			<?php
					$i++;
				}
			?>
			<footer>
				<p class="pull-right"><a href="#">Kembali ke atas</a></p>
				<p>Sistem Informasi Peminjaman Novel &copy; 2016.</p>
			</footer>
		</div>
	</body>
</html>
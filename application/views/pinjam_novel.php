		<div class="container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.2)), url('<?php echo base_url(); ?>assets/img/background.jpg'); min-height:200px; border-radius:0px 0px 10px 10px;">
		</div>
		<div class="container">
			<div style="margin-top:30px;" class="row">
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
			<div class="col-md-3" style="margin-top:50px;">
				<a class="btn btn-primary form-control pinjam <?php if($row->stok <= 0){ echo 'disabled'; } ?>" href="#" role="button"
				 data-toggle="modal" data-target="#modal_pinjam" id="pinjam_<?php echo $row->id_novel; ?>">Pinjam &raquo;</a>
			</div>
			<?php } ?>
			</div>
		</div>
		<div class="container marketing" style="margin-top:100px;">
			<hr />
			<footer>
				<p class="pull-right"><a href="#">Kembali ke atas</a></p>
				<p>Sistem Informasi Peminjaman Novel &copy; 2016.</p>
			</footer>
		</div>
	</body>
</html>

<div class="modal fade" id="modal_pinjam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<form method="POST" action="<?php echo site_url(); ?>pinjam_novel/peminjaman" enctype="multipart/form-data">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Peminjaman</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6" style="border-right:1px solid #f3f3f3;">
							<div class="text-center">
								<br />
								<h3>Sudah punya akun ?</h3>
								<a href="#" id="id"><h4>Gunakan ID User untuk pinjam.</h4></a>
								<br />
								<br />
							</div>
						</div>
						<div class="col-md-6" style="border-left:1px solid #f3f3f3;">
							<div class="text-center">
								<br />
								<h3>Belum punya akun ?</h3>
								<a href="#" id="noid"><h4>Buat akun baru kamu disini.</h4></a>
								<br />
								<br />
							</div>
						</div>
					</div>
					<hr/>
					<div id="peminjaman">
				</div>
				<div class="modal-footer">
					<input type="hidden" name="id_novel" id="id_novel">
					<button class="btn btn-primary" type="submit"> Pinjam</button>
					<button class="btn btn-default" data-dismiss="modal"> Tutup</button>
				</div>
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>

<!-- /. JAVASCRIPT  --> 
<script type="text/javascript">
	$(document).ready(function () {
	
		$("#id").click(function(){
			$.post("<?php echo site_url();?>pinjam_novel/ambil_id/",{},function(obj){
				$('#peminjaman').html(obj);
			});   
		});
		
		$("#noid").click(function(){
			$.post("<?php echo site_url();?>pinjam_novel/ambil_register/",{},function(obj){
				$('#peminjaman').html(obj);
			});   
		});
		
		$('.pinjam').click(function() {
			var id=this.id.substr(7);
			$('#id_novel').val(id);
		});
		
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
		<?php if($this->session->flashdata('error')){ ?>
			alert('<?php echo $this->session->flashdata('error'); ?>');
		<?php } ?>
	});
</script>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-12">
							<div class="content-box-header panel-heading">
								<div class="panel-title ">Pengembalian</div>
							</div>
							<div class="content-box-large box-with-header">
								<div class="panel-body">
									<form method="post" action="<?php echo site_url(); ?>admin_pengembalian/pengembalian">
										<div class="form-group">
											<label>ID User</label>
											<input class="form-control" placeholder="ID User" name="id_user" id="id_user" type="text">
										</div>
										<div class="form-group">
											<label>Judul Novel</label>
											<select name="id_novel" id="id_novel" class="form-control">
												<option selected disabled>--Pilih Judul Novel--</option>
												
											</select>
										</div>
										<div class="form-group">
											<label>Tanggal Kembali</label>
											<input class="form-control" placeholder="Tanggal Kembali" name="tgl_kembali" type="text" value="<?php echo date('d-m-Y'); ?>" readonly />
										</div>
										<div class="modal-footer">
											<input type="submit" class="btn btn-primary" value="Simpan">
										</div>
									</form>
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

<!-- /. JAVASCRIPT  --> 
<script type="text/javascript">
	$(document).ready(function () {
	
		$("#id_user").keyup(function(){
			$.post("<?php echo site_url();?>admin_pengembalian/ambil_novel/"+$('#id_user').val(),{},function(obj){
				$('#id_novel').html(obj);
			});   
		});
		
		<?php if($this->session->flashdata('success')){ ?>
			alert('<?php echo $this->session->flashdata('success'); ?>');
		<?php } ?>
	});
</script>
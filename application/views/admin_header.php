<!DOCTYPE html>
<html>
	<head>
		<title>Admin SIMPEL</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
	
		<link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>assets/img/favicon.png"/>
		<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
		
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom.js"></script>
		<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.js"></script>
		<script src="<?php echo base_url();?>assets/js/tables.js"></script>
	</head>
	<body>
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="logo">
							<h1><a href="<?php echo site_url(); ?>admin_beranda">SIMPEL</a></h1>
						</div>
					</div>
					<div class="col-md-5">
						
					</div>
					<div class="col-md-2">
						<div class="navbar navbar-inverse" role="banner">
							<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata('username'); ?> <b class="caret"></b></a>
										<ul class="dropdown-menu animated fadeInUp">
											<li><a data-toggle="modal" data-target="#modal_profil" href="#">Profil</a></li>
											<li><a href="<?php echo site_url(); ?>admin/keluar">Keluar</a></li>
										</ul>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="modal_profil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<form method="POST" id="form_ubah" enctype="multipart/form-data">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Profil Admin</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username</label>
								<input class="form-control" name="username" value="<?php echo $this->session->userdata('username'); ?>" placeholder="Username" type="text" readonly />
							</div>
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" name="password" value="<?php echo $this->session->userdata('password'); ?>" placeholder="Password" type="text" readonly />
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

		<div class="page-content">
			<div class="row">
				<div class="col-md-2">
					<div class="sidebar content-box" style="display: block;">
						<ul class="nav">
							<li <?php if($this->uri->segment(1) == 'admin_beranda') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_beranda"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
							<li class="submenu <?php if($this->uri->segment(1) == 'admin_daftar_novel') { echo 'open'; } ?>">
								<a href="#">
									<i class="glyphicon glyphicon-list"></i> Daftar Novel
									<span class="caret pull-right"></span>
								</a>
								<ul>
									<li <?php if($this->uri->segment(2) == 'tersedia') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_daftar_novel/tersedia">Tersedia</a></li>
									<li <?php if($this->uri->segment(2) == 'dipinjam') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_daftar_novel/dipinjam">Dipinjam</a></li>
								</ul>
							</li>
							<li <?php if($this->uri->segment(1) == 'admin_pengembalian') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_pengembalian"><i class="glyphicon glyphicon-check"></i> Pengembalian</a></li>
							<li class="submenu <?php if($this->uri->segment(1) == 'admin_manajemen') { echo 'open'; } ?>">
								<a href="#">
									<i class="glyphicon glyphicon-user"></i> Manajemen
									<span class="caret pull-right"></span>
								</a>
								<ul>
									<li <?php if($this->uri->segment(2) == 'admin') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_manajemen/admin">Admin</a></li>
									<li <?php if($this->uri->segment(2) == 'user') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_manajemen/user">User</a></li>
								</ul>
							</li>
							<li class="submenu <?php if($this->uri->segment(1) == 'admin_tampilan') { echo 'open'; } ?>">
								<a href="#">
									<i class="glyphicon glyphicon-cog"></i> Tampilan
									<span class="caret pull-right"></span>
								</a>
								<ul>
									<li <?php if($this->uri->segment(2) == 'banner') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_tampilan/banner">Banner</a></li>
									<li <?php if($this->uri->segment(2) == 'konten') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_tampilan/konten">Konten</a></li>
								</ul>
							</li>
							<li <?php if($this->uri->segment(1) == 'admin_laporan') { echo 'class="current"'; } ?>><a href="<?php echo site_url(); ?>admin_laporan"><i class="glyphicon glyphicon-stats"></i> Laporan</a></li>
						</ul>
					</div>
				</div>
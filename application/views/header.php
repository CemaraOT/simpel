<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
	
		<link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>assets/img/favicon.png"/>
		
		<title>Simpel</title>

		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/carousel.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">

		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/ie10-viewport-bug-workaround.js"></script>
		<style>
			.navbar-inverse .navbar-nav > li > a{
				color:#fff;
			}
			
			.navbar-inverse .navbar-nav > li > a:hover{
				color:#9d9d9d;
			}
			
			#imaginary_container{
				margin-top:23%; /* Don't copy this */
				margin-bottom:3%; /* Don't copy this */
			}
			
			.stylish-input-group .input-group-addon{
				background: white !important; 
			}
			
			.stylish-input-group .form-control{
				border-right:0; 
				box-shadow:0 0 0; 
				border-color:#ccc;
			}
			
			.stylish-input-group button{
				border:0;
				background:transparent;
			}
			
			a.disabled {
				pointer-events: none;
				cursor: default;
			}
		</style>
	</head>
	<body>
		<div class="navbar-wrapper">
			<div class="container">
				<nav class="navbar navbar-inverse navbar-static-top" style="background:rgba(0,0,0,0.5); border:none;">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="<?php echo site_url(); ?>" style="color:#fff;">SIMPEL</a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li <?php if($this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '') { echo 'class="active"'; } ?>><a href="<?php echo site_url(); ?>beranda">Beranda</a></li>
								<li <?php if($this->uri->segment(1) == 'cari_novel') { echo 'class="active"'; } ?>><a href="<?php echo site_url(); ?>cari_novel">Cari Novel</a></li>
								<!-- <li <?php if($this->uri->segment(1) == 'tentang_kami') { echo 'class="active"'; } ?>><a href="<?php echo site_url(); ?>tentang_kami">Tentang Kami</a></li> -->
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
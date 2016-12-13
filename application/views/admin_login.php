<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
	
		<link rel="shortcut icon" type="image/icon" href="<?php echo base_url();?>assets/img/favicon.png"/>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
		
		<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/custom.js"></script>
	</head>
	<body class="login-bg">
		<div class="header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="logo">
							<h1><a href="<?php echo site_url(); ?>admin">Sistem Informasi Peminjaman Novel</a></h1>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="page-content container" style="padding-top:5%;">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-wrapper">
						<div class="box">
							<div class="content-wrap">
								<h6>ADMIN LOGIN</h6>
								<input class="form-control" type="text" placeholder="Username">
								<input class="form-control" type="password" placeholder="Password">
								<div class="action">
									<a class="btn btn-primary signup" href="<?php echo site_url(); ?>admin_beranda">Login</a>
								</div>                
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
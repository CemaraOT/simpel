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
							<form method="post" action="<?php echo site_url();?>admin/masuk">
								<div class="content-wrap">
									<h6>ADMIN LOGIN</h6>
									<input class="form-control" type="text" name="username" placeholder="Username">
									<input class="form-control" type="password" name="password" placeholder="Password">
									<div class="action">
										<input type="submit" style="width:100%;" class="btn btn-primary" value="Login" />
									</div>                
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

<!-- /. JAVASCRIPT  --> 
<script type="text/javascript">
	$(document).ready(function () {
		<?php if($this->session->flashdata('error')){ ?>
			alert('<?php echo $this->session->flashdata('error'); ?>');
		<?php } ?>
	});
</script>
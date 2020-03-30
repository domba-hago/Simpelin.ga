<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">

	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	
	<title>Simpelin.ga - Sederhanakan URL Anda</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url(''); ?>">Simpelin.ga</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo base_url(''); ?>">Beranda</a></li>
					<li><a href="<?php echo base_url('bantuan'); ?>">Bantuan</a></li>
					<li><a href="<?php echo base_url('tentang'); ?>">Tentang</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron">
	  	<div class="container text-center">
	    	<img class="img-responsive center-block" src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Site Logo">
	    	<p class="padding-20">Sederhanakan URL panjang Anda sekarang!</p>
	    	<div class="row">
	    		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
	    			<form method="post" action="<?php echo base_url('pages/proses'); ?>">
		    			<?php echo $this->session->flashdata('status'); ?>
		    			<div class="input-group">
		    				<input class="form-control input-lg" type="text" name="url" placeholder="URL anda">
		    				<span class="input-group-btn">
		    					<button class="btn btn-success input-lg" type="submit">Sederhanakan!</button>
		    				</span>
		    			</div>
		    		</form>
	    		</div>
	    	</div>
	  	</div>
	</div>
	<footer class="footer-distributed">
		<div class="footer-left">
			<img src="<?php echo base_url('assets/img/logo.png'); ?>" alt="Site Logo" width="150px" style="padding-bottom: 15px;">
			<p class="footer-links">
				<a href="<?php echo base_url(''); ?>">Home</a> · <a href="<?php echo base_url('bantuan'); ?>">Bantuan</a> · <a href="<?php echo base_url('tentang'); ?>">Tentang</a>
			</p>
			<p class="footer-company-name">&copy; 2016 <a href="#">simplein.ga</a>. All Rights Reserved.</p>
			<div class="footer-icons">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>
			</div>
		</div>
		<div class="footer-right">
			<p>Kontak Kami</p>
			<form action="<?php echo base_url('core/kirim_mail'); ?>" method="post">
				<input type="text" name="email" placeholder="Email" />
				<textarea name="message" placeholder="Message"></textarea>
				<button>Kirim</button>
			</form>
		</div>
	</footer>
</body>
</html>
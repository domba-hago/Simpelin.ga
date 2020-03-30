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
	
	<title>Simpelin.ga - Tentang Kami</title>
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
					<li><a href="<?php echo base_url(''); ?>">Beranda</a></li>
					<li><a href="<?php echo base_url('bantuan'); ?>">Bantuan</a></li>
					<li class="active"><a href="<?php echo base_url('tentang'); ?>">Tentang</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Tentang Kami</h2>
				<p class="text-justify"><b>Simpelin.ga</b>, sesuai dengan namanya. Website ini merupakan sebuah website yang digunakan untuk memendekan URL Anda yang sangat panjang hanya menjadi beberapa karakter saja.</p>
				<p class="text-justify">Website ini dibuat untuk memenuhi tugas mata kuliah Interaksi Manusia dan Komputer yang diampu oleh Ibu Swahesti Puspita Rahayu, S.Kom, M.Kom Universitas Jenderal Soedirman Purwokerto.</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Siapa saja?</h2>
				<p>Inilah orang-orang yang bekerja dibelakang layar</p>
				<div class="row">
					<div class="col-sm-3 col-xs-6">
						<img class="img-responsive portfolio-item" src="<?php echo base_url('assets/img/team01.jpg'); ?>" alt="Team 01">
						<h4>M. Rifqi Saiful A. H.</h4>
						<p><b>H1D015004</b>, Indramayu</p>
					</div>
					<div class="col-sm-3 col-xs-6">
						<img class="img-responsive portfolio-item" src="<?php echo base_url('assets/img/team02.jpg'); ?>" alt="Team 02">
						<h4>Rizki Taufiq Ramadan</h4>
						<p><b>H1D015009</b>, Tasikmalaya</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
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
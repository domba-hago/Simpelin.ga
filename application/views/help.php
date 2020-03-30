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
					<li class="active"><a href="<?php echo base_url('bantuan'); ?>">Bantuan</a></li>
					<li><a href="<?php echo base_url('tentang'); ?>">Tentang</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>Bantuan</h2>
				<div class="text-justify" style="font-size: 13pt;">
					<blockquote>
						<p>Apa itu Simpelin.ga?</p>
						<footer>
							Simpelin.ga merupakan sebuah website yang digunakan untuk memendekan URL Anda yang sangat panjang hanya menjadi beberapa karakter saja.
						</footer>
					</blockquote>
					<blockquote>
						<p>Bagaimana cara memendekan URL pada Simpelin.ga?</p>
						<footer>
							Anda cukup mengunjungi halaman utama kami di <a href="<?php echo base_url(''); ?>" title="Simpelin.ga" target="_blank"><?php echo base_url(''); ?></a>. Kemudian pada kolom <b>URL Anda</b> yang terletak dibagian tengah halaman, isikan URL yang ingin Anda pendekkan dan klik tombol <b>Sederhanakan</b> yang berwarna hijau disamping kolom URL Anda.
						</footer>
					</blockquote>
					<blockquote>
						<p>Apakah disediakan URL custom?</p>
						<footer>
							Saat ini fitur tersebut sedang kami kerjakan dan nanti akan kami terapkan kedalam sistem
						</footer>
					</blockquote>
					<p>Jika ada pertanyaan yang belum terdapat diatas dan ingin diajukan kepada kami, silahkan untuk mengisi form yang berada dibawah. Terima kasih</p>
				</div>
			</div>
		</div>
	</div>
	<br><br>
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
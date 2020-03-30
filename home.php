<?php
	function RandomString($length = 8)
	{
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';

	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }

	    return $randomString;
	}

	$username	= 'root';
	$password	= 'toor';
	$server		= 'localhost';

	$sql = mysqli_connect($server, $username, $password) or die('Tidak dapat terkoneksi ke database!');
	mysqli_select_db($sql, 'simpelin');

	$short_url = '';

	if (strtoupper($_SERVER['REQUEST_METHOD'] === 'POST'))
	{
		$url_long 	= $_POST['url'];
		$url_rand 	= RandomString();
		$short_url 	= $url_rand;

		$query = "INSERT INTO data_url (url_long, url_short, count) VALUES ('$url_long', '$url_rand', 0)";
		$query = mysqli_query($sql, $query);
	}

	if (strtoupper($_SERVER['REQUEST_METHOD'] === 'GET'))
	{
		$url_short	= '';
		$url_long	= '';

		if (isset($_GET['url']))
			$url_short = $_GET['url'];
		

		$query = "SELECT url_long FROM data_url WHERE url_short='$url_short'";
		$query = mysqli_query($sql, $query);

		while($row = mysqli_fetch_object($query))
			$url_long = $row->url_long;

		header('Location: '.$url_long);
	}

	mysqli_close($sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

	<title>Simpelin.ga - Sederhanakan URL Anda</title>
</head>
<body>
	<div class="jumbotron">
	  	<div class="container text-center">
	    	<img class="img-responsive center-block" src="img/logo.png" alt="Site Logo">
	    	<p>Sederhanakan URL panjang Anda sekarang!</p>
	    	<div class="row">
	    		<div class="col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
	    			<form method="post" action="">
		    			<div class="input-group">
		    				<input class="form-control input-lg" type="text" name="url" placeholder="Link anda" value="<?php echo $short_url; ?>">
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
			<img src="img/logo.png" alt="Site Logo" width="150px" style="padding-bottom: 15px;">
			<p class="footer-links">
				<a href="#">Home</a> · <a href="#">Tentang</a> · <a href="#">Daftar</a> · <a href="#">Login</a>
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
			<form action="#" method="post">
				<input type="text" name="email" placeholder="Email" />
				<textarea name="message" placeholder="Message"></textarea>
				<button>Kirim</button>
			</form>
		</div>
	</footer>
</body>
</html>
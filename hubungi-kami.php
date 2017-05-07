<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hubungi Kami | M-PAYMENT</title>
	<link rel="stylesheet" href="css/hubungi-kami.css">
	<link rel="icon" href="img/icon.png">
</head>
<body>
	<div class="container">
		<div class="tagline1">
			<span class="logo"><a href="/login_dashboard"><img class="logo-img" src="img/M-Payment.png"></a></span>
			<ul class="menu-position">
				<li class="menu"><a class="text-decoration" href="transaksi.php">TRANSAKSI</a></li>
				<li class="menu"><a class="text-decoration" href="status.php">CEK STATUS</a></li>
				<!-- <li class="menu"><a class="text-decoration" href="#">TOOLS</a></li> -->
				<li class="menu"><a class="text-decoration" href="#">BLOG</a></li>
				<li class="menu"><a class="text-decoration" href="harga.php">HARGA</a></li>
				<li class="menu"><a class="text-decoration" href="tentang-kami.php">TENTANG KAMI</a></li>
				<li class="menu"><a class="text-decoration" href="hubungi-kami.php">HUBUNGI KAMI</a></li>
			</ul>
		</div>
		<div class="tagline2">
		 <div class="box-map">
		  	<div class="textq">
		  	  <div class="text1">M-PAYMENT</div>
		  	  <div class="text2">Kota Mojokerto</div>
		  	  <div class="text3">admin@m-payment.com</div>
		  	  <div class="linee"></div>
		  	</div>
		  <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d31647.551311096377!2d112.4217213!3d-7.4714461!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2ssg!4v1487124937758" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		  <div class="help">Hubungi Kami</div>
		  <br>
		  <form action="proccess/help.php" method="POST" accept-charset="utf-8">
		    <div class="isi-pesan">
		    <label>Isi Pesan*</label><br>
		  	<input class="textbox" type="text" name="pesan">
		  	<br><br>
		  	<input class="kirim" type="submit" name="kirim" value="Kirim">
		  	</div>
		  	<label>Nama*</label>
		  	<br>
		  	<input type="text" name="nama">
		  	<br><br>
		  	<label>Email*</label>
		  	<br>
		  	<input type="email" name="email">
		  	<br><br>
		  	<label>Judul Pesan*</label>
		  	<br>
		  	<input type="text" name="judul">
		  </form>
		  </div>
		</div>
		<div class="tagline3">
			<span class="copyright">Copyright © 2017. <b>M-PAYMENT</b> All Rights Reserved</span>
			<a href="http://facebook.com/habibulilabaab"><img class="fb" src="img/facebook.png"></a>
		</div>
	</div>
</body>
</html>
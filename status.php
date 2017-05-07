<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cek Status | M-PAYMENT</title>
	<link rel="stylesheet" href="css/status.css">
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
		  <div class="form-box1">CEK STATUS</div>
		  <div class="form-box2">
		    <div class="listrik">CEK STATUS</div>
		    <center>
		      <img class="img-pln" src="img/search.png">
		    </center>
		    <div class="listrik">TRANSAKSI</div>
		  </div>
		  <div class="form-box3">
		  	<div class="token">CEK STATUS</div>
		  	<form action="proccess/token.php" method="POST" accept-charset="utf-8">
		  	<table>
		  	  <tr>
		  	    <td><label class="nama-form">Nomor Invoice*</label></td>
		  	    <td>: <input class="ukuran-form" type="number" name="ponsel" required="" placeholder="086xxx" maxlength="6"></td>
		  	  </tr>
		  	  <tr>
		  	    <td></td>
		  	    <td><input class="submit" type="submit" name="bayar" value="LANJUTKAN"></td>
		  	  </tr>
		  	</table>
		  	</form>
		  	<div class="info"><span class="info1">INFO!</span>    Tanda * wajib diisi cek status menggunakan nomor<br> <b>INVOICE</b> yang dikirimkan ke alamat email <br> <span class="ppn"><u>HUBUNGI KAMI JIKA TERJADI KENDALA.</u></span></div>
		  </div>
		</div>
		<div class="tagline3">
			<span class="copyright">Copyright © 2017. <b>M-PAYMENT</b> All Rights Reserved</span>
			<a href="http://facebook.com/habibulilabaab"><img class="fb" src="img/facebook.png"></a>
		</div>
	</div>
</body>
</html>
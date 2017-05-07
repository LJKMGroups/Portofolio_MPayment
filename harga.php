<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Harga | M-PAYMENT</title>
	<link rel="stylesheet" href="css/harga.css">
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
		<div class="menu-header">
			<div class="text1">Home <span>/</span></div>
			<div class="text2">Harga</div>
		</div>
		<div class="tagline2">

	<table class="tabel" width="98%" cellspacing="0">
      <tr>
         <td style="border: 1px solid #ed6e00;" width="30%" height="30px"><center>Nama Produk</center></td>
         <td style="border: 1px solid #ed6e00;" width="30%" height="30px"><center>Kode Produk</center></td>
         <td style="border: 1px solid #ed6e00;" width="30%" height="30px"><center>Harga Produk</center></td>
       </tr>
       <?php
       include "inc/connection.php";

       $qData = "SELECT * FROM product";

       $tampilData = mysqli_query($openServer, $qData);

       while ($data = mysqli_fetch_array($tampilData)){
    ?>
     <tr>
       <td style="border: 1px solid #ed6e00;"><?php echo $data['nama_produk']; ?></td>
       <td style="border: 1px solid #ed6e00;"><?php echo $data['kode_produk']; ?></td>
       <td style="border: 1px solid #ed6e00;">Rp. <?php echo $data['harga_produk']; ?></td>
     </tr>
     <?php 
     }
     ?>
     </table>
		</div>
		<div class="tagline3">
			<span class="copyright">Copyright © 2017. <b>M-PAYMENT</b> All Rights Reserved</span>
			<a href="http://facebook.com/habibulilabaab"><img class="fb" src="img/facebook.png"></a>
		</div>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Token PLN | M-PAYMENT</title>
	<link rel="stylesheet" href="css/token-pln.css">
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
		  <div class="form-box1">Beli Token PLN</div>
		  <div class="form-box2">
		    <div class="listrik">LISTRIK</div>
		    <center>
		      <img class="img-pln" src="img/pln.png">
		    </center>
		    <div class="listrik">PRABAYAR</div>
		  </div>
		  <div class="form-box3">
		  	<div class="token">TOKEN</div>
		  	<form action="token-pln.php" method="POST" accept-charset="utf-8">
		  	<table>
		  	  <tr>
		  	    <td><label class="nama-form">Nomor Ponsel*</label></td>
		  	    <td>: <input class="ukuran-form" type="number" name="ponsel" required="" placeholder="08xxxxxxxxxx"></td>
		  	  </tr>
		  	  <tr>
		  	    <td><label class="nama-form">Email*</label></td>
		  	    <td>: <input class="ukuran-form" type="email" name="email" required="" placeholder="mail@domain.com"></td>
		  	  </tr>
		  	  <tr>
		  	    <td><label class="nama-form">Nomor Meter PLN*</label></td>
		  	    <td>: <input class="ukuran-form" type="number" name="no_pln" required=""></td>
		  	  </tr>
		  	  <tr>
		  	    <td><label class="nama-form">Nominal*</label></td>
		  	    <td>: <select class="ukuran-form1" name="token" required="">
		  	    <?php 
		  	      include 'inc/koneksi.php';

		  	      $qPln = "SELECT * FROM token_pln";

		  	      $tampilPln = mysqli_query($openServer, $qPln);

		  	      while ($baris = mysqli_fetch_array($tampilPln)) {
		  	    ?>
		  	    	
		  	    	<option value=<?php echo $baris['id_pln']; ?>> <?php echo $baris['token_pln'] . " - " . $baris['harga_jual']; ?></option>
		  	    	<?php 
		  	    	 }
		  	    	?>
		  	    </select></td>
		  	  </tr>
		  	  <tr>
		  	    <td></td>
		  	    <td><input class="submit" type="submit" name="bayar" value="LANJUTKAN"></td>
		  	  </tr>
		  	</table>
		  	</form>

		  	<?php 
		  	  if (isset($_POST['bayar'])) {
		  	  	$ponsel = $_POST['ponsel'];
		  	  	$email = $_POST['email'];
		  	  	$no_pln = $_POST['no_pln'];
		  	  	$token = $_POST['token'];

		  	  	include "inc/koneksi.php";
		  	  	$qSimpanData = "INSERT INTO `order_pln`(`nomor`, `email`, `meter_pln`, `nominal`) VALUES ( '$ponsel' , '$email' , '$no_pln' , '$token')";
		  	  	$goSave = mysqli_query($openServer, $qSimpanData);

		  	  	include "inc/koneksi.php";
		  	  	$aQ = "SELECT `harga_jual` FROM `token_pln` WHERE `id_pln` = $token";
		  	  	$qTampil = mysqli_query($openServer, $aQ);

                while ($data = mysqli_fetch_array($qTampil)) {

  	            session_start();
		  	    	$_SESSION['no_pln'] = $no_pln;
		  	    	$_SESSION['harga_pln'] = $data['harga_jual'];

		  		header('location:pay/token-pln/invoice.php');
		  	  }}
		  	?>
		  	
		  	<div class="info"><span class="info1">INFO!</span>    Tanda * wajib diisi <br> <b>TOKEN</b> akan dikirimkan ke alamat email <br> <span class="ppn"><u>HARGA SUDAH TERMASUK PPN 10%</u></span></div>
		  </div>
		</div>
		<div class="tagline3">
			<span class="copyright">Copyright © 2017. <b>M-PAYMENT</b> All Rights Reserved</span>
			<a href="http://facebook.com/habibulilabaab"><img class="fb" src="img/facebook.png"></a>
		</div>
	</div>
</body>
</html>
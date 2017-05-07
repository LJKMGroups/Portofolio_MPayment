<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Voucher Game | M-PAYMENT</title>
	<link rel="stylesheet" href="css/voucher.css">
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
		  <div class="form-box1">Beli Voucher Game</div>
		  <div class="form-box2">
		    <div class="listrik">VOUCHER</div>
		    <center>
		      <img class="img-pln" src="img/garena.png">
		    </center>
		    <div class="listrik">GAME</div>
		  </div>
		  <div class="form-box3">
		  	<div class="token">VOUCHER GAME</div>
		  	<form action="voucher.php" method="POST" accept-charset="utf-8">
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
		  	    <td><label class="nama-form">Jenis Voucher*</label></td>
		  	    <td>: <select class="ukuran-form1" name="provider" required="">
		  	    	<?php 
		  	        include 'inc/koneksi.php';

		  	        $qVoucher = "SELECT * FROM voucher";

		  	        $tampilVoucher = mysqli_query($openServer, $qVoucher);

		  	        while ($baris = mysqli_fetch_array($tampilVoucher)) {
		  	      ?>
		  	      
		  	    	<option value=<?php echo $baris['id_voucher']; ?>> <?php echo $baris['jenis_voucher'] . " - " . $baris['harga_jual'];  ?></option>
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
		  		$provider = $_POST['provider'];

		  		include "inc/koneksi.php";
		  		$simpanData = "INSERT INTO `order_voucher`(`nomor`, `email`, `voucher`) VALUES ( '$ponsel', '$email', '$provider')";
		  		$goSave = mysqli_query($openServer, $simpanData);

				include "inc/koneksi.php";

                $aQ = "SELECT `harga_jual` FROM `voucher` WHERE `id_voucher` = $provider";
                $qTampil = mysqli_query($openServer, $aQ);

                while ($data = mysqli_fetch_array($qTampil)) {

  	            session_start();
		  	    	$_SESSION['ponsel'] = $ponsel;
		  	    	$_SESSION['provider'] = $data['harga_jual'];		  		

		  		header('location:pay/voucher/invoice.php');
		  	}}
		  	?>


		  	<div class="info"><span class="info1">INFO!</span>    Tanda * wajib diisi <br> <b>SALINAN</b> akan dikirimkan ke alamat email <br> <span class="ppn"><u>HARGA SUDAH TERMASUK PPN 10%</u></span></div>
		  </div>
		</div>
		<div class="tagline3">
			<span class="copyright">Copyright © 2017. <b>M-PAYMENT</b> All Rights Reserved</span>
			<a href="http://facebook.com/habibulilabaab"><img class="fb" src="img/facebook.png"></a>
		</div>
	</div>
</body>
</html>
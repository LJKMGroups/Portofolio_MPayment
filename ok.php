<?php 
  include "inc/koneksi.php";

  $aQ = "SELECT `harga_jual` FROM `provider` WHERE `id_provider` = 4";
  $qTampil = mysqli_query($openServer, $aQ);

  while ($data = mysqli_fetch_array($qTampil)) {
  	echo $data['harga_jual'];
   }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Produk</title>
  <link rel="stylesheet" href="css/edit-produk.css">
  <link rel="icon" href="img/icon.png">
</head>
<body>
  <?php 
    session_start();

    if (!isset($_SESSION['session admin'])) {
      header("location:login.php");      
    }else{
    echo "<a href=?logout></a>";
   }

   if (isset($_GET['logout'])) {
    session_destroy();
    header("location:login.php");
   }
    
  ?>
   <div class="container">
     <div class="header">
       <span class="name-store">
         <h1 class="namestore"><a class="nav-link-header" href="dashboard.php">M-PAYMENT</a></h1>
       </span>
       <span>
         <img class="navbar" src="img/navbar.png">
         <a href="?logout"><img class="logout" src="img/logout.png"></a>
       </span>
     </div>
     <div class="navigation">
       <div class="user-login">
         <img class="profile-img" src="img/customer.png">
         <span class="username"><?php echo $_SESSION['session admin']; ?></span>
       </div>


       <a class="nav-link" href="dashboard.php">
         <div class="menu1">
           <img class="position-menu" src="img/dashboard.png">
           <span class="position-text">Dashboard</span>
         </div>
       </a>
       <a class="nav-link" href="input-produk.php">
         <div class="menu1">
           <img class="position-menu" src="img/input.png">
           <span class="position-text">Input Produk</span>
         </div>
       </a>
       <a class="nav-link" href="produk.php">
         <div class="menu1">
           <img class="position-menu" src="img/price.png">
           <span class="position-text">Produk</span>
         </div>
       </a>
       <a class="nav-link" href="pelanggan.php">
         <div class="menu1">
           <img class="position-menu" src="img/customer.png">
           <span class="position-text">Pelanggan</span>
         </div>
       </a>
       <a class="nav-link" href="order.php">
         <div class="menu1">
           <img class="position-menu" src="img/order.png">
           <span class="position-text">Order Proses</span>
         </div>
       </a>
       <!-- <div class="menu1">
         <img class="position-menu" src="img/navbar.png">
         <span class="position-text">Laporan</span>
       </div> -->
       <!-- <div class="menu1">
         <img class="position-menu" src="img/navbar.png">
         <span class="position-text">Email</span>
       </div>
       <div class="menu1">
         <img class="position-menu" src="img/navbar.png">
         <span class="position-text">Pengaturan</span>
       </div> -->
     </div>
     <div class="content-header">
         <span class="menu-select">Edit Produk</span>
     </div>
     <div class="content">
       <?php
       include "inc/connection.php";

       $idproduk = $_GET['edit-produk'];

       $editData = mysqli_query($openServer, "SELECT * FROM product WHERE nama_produk = '$idproduk'");

       while ($data = mysqli_fetch_array($editData))
           {
       ?>

       <form action="edit-produk.php" method="POST">
       <center>
      <table class="posisi">
      <tr>
        <td><label>Nama Produk</label></td>
        <td>: <input class="date" type="text" name="nproduk" value="<?php echo $data['nama_produk'] ?>"></td>
      </tr>
      <tr>
        <td><label>Kode Produk</label></td>
        <td>: <input class="date" type="text" name="kproduk" value="<?php echo $data['kode_produk'] ?>"></td>        
      </tr>
      <tr>
        <td><label>Harga Produk</label></td>
        <td>: <input class="date" type="number" name="hproduk" value="<?php echo $data['harga_produk'] ?>"></td>
      </tr>
      <tr>
        <td><br></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td><center><input class="maju" type="submit" name="simpan" value="EDIT"></center></td>
      </tr>
    </table>
    </center>
    </form>

    <?php 
    }
    ?>

    <?php 
    if (isset($_POST['simpan'])) {
        $nproduk = $_POST['nproduk'];
        $kproduk = $_POST['kproduk'];
        $hproduk = $_POST['hproduk'];

        include "inc/connection.php";

      $dataProduct = "UPDATE `product` SET `nama_produk`='$nproduk',`kode_produk`='$kproduk',`harga_produk`='$hproduk' WHERE nama_produk = '$nproduk'";
      $simpanUpdate = mysqli_query($openServer, $dataProduct);
      header('location:harga-produk.php');
    }
    ?>
     </div>
   </div>
</body>
</html>
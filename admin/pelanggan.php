<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pelanggan</title>
  <link rel="stylesheet" href="css/pelanggan.css">
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
         <span class="menu-select">Pelanggan</span>
     </div>
     <div class="content">
       <center>
       <table class="tabel" border="1" width="98%" cellspacing="0">
         <tr>
           <td width="20%"><center>Nama</center></td>
           <td width="11%"><center>Nomor HP</center></td>
           <td width="19%"><center>Email</center></td>
           <td width="10%"><center>Tgl Lahir</center></td>
           <td width="30%"><center>Alamat</center></td>
           <td width="10%"><center>Action</center></td>
         </tr>
         <?php 
         include "inc/connection.php";

         $qCustomer = "SELECT * FROM customer";
         $dateCustomer = mysqli_query($openServer, $qCustomer);

         while ($data = mysqli_fetch_array($dateCustomer)) { ?>
      
           <tr>
             <td><?php echo $data['nama_depan']; ?> <?php echo $data['nama_belakang']; ?></td>
             <td><center><?php echo $data['no_hp']; ?></center></td>
             <td><?php echo $data['email']; ?></td>
             <td><center><?php echo $data['tgl_lahir']; ?></center></td>
             <td><center><?php echo $data['alamat']; ?></center></td>
             <td><a href="?delete=<?php echo $data['nama_depan']; ?>"><center><img src="img/delete.png"></a>
            <a href="edit-pelanggan.php?edit=<?php echo $data['nama_depan']; ?>"><img src="img/edit.png"></center></a>
             </td>
           </tr>
         <?php
         }
         ?>
       </table>
       </center>

       <?php 
       if (isset($_GET['delete'])) {
         $delCustomer = $_GET['delete'];

         $qDelCustomer = "DELETE FROM `customer` WHERE nama_depan = '$delCustomer'";
         $proccesDel = mysqli_query($openServer, $qDelCustomer);
         header('location:pelanggan.php');
       }
       ?>
     </div>
   </div>
</body>
</html>
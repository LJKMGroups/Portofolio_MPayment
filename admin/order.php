<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Order Proses</title>
  <link rel="stylesheet" href="css/order.css">
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
       <span class="menu-select">Order Proses</span>
     </div>
     <div class="content">
       <center>
       <div class="jenis_order">Order List Pulsa</div>
       <table cellspacing="0">
         <tr>
           <td style="border: 1px solid #34495e;" width="100px">Nomor</td>
           <td style="border: 1px solid #34495e;" width="600px">Email</td>
           <td style="border: 1px solid #34495e;" width="100px">Provider</td>
           <td style="border: 1px solid #34495e;" width="100px;"><center>Aksi</center></td>
         </tr>

         <?php
       include "inc/koneksi.php";

       $qData = "SELECT * FROM order_pulsa";

       $tampilData = mysqli_query($openServer, $qData);

       while ($data = mysqli_fetch_array($tampilData)){
    ?>
     <tr>
       <td style="border: 1px solid #34495e;"><?php echo $data['nomor']; ?></td>
       <td style="border: 1px solid #34495e;"><?php echo $data['email']; ?></td>
       <td style="border: 1px solid #34495e;"><?php echo $data['provider']; ?></td>
       <td style="border: 1px solid #34495e;"><center>
           <a href="?id-pulsa=<?php echo $data['id_order']; ?>" data-toggle="tooltip" title="Approve"><img src="img/approve.png"></a>
           <!-- 
           <img src="img/not-approve.png"> -->
           </center>
           <script>
           $(document).ready(function(){
               $('[data-toggle="tooltip"]').tooltip(); 
           });
           </script>
       </td>
     </tr>
     <?php 
     }
     ?>
       </table>
       </center>
       <br>
       <center>
       <div class="jenis_order">Order List Voucher</div>
       <table cellspacing="0">
         <tr>
           <td style="border: 1px solid #34495e;" width="100px">Nomor</td>
           <td style="border: 1px solid #34495e;" width="600px">Email</td>
           <td style="border: 1px solid #34495e;" width="100px">Provider</td>
           <td style="border: 1px solid #34495e;" width="100px"><center>Aksi</center></td>
         </tr>
         <?php
       include "inc/koneksi.php";

       $qData = "SELECT * FROM order_voucher";

       $tampilData = mysqli_query($openServer, $qData);

       while ($data = mysqli_fetch_array($tampilData)){
    ?>
     <tr>
       <td style="border: 1px solid #34495e;"><?php echo $data['nomor']; ?></td>
       <td style="border: 1px solid #34495e;"><?php echo $data['email']; ?></td>
       <td style="border: 1px solid #34495e;"><?php echo $data['voucher']; ?></td>
       <td style="border: 1px solid #34495e;"><center>
           <a href="?id-voucher=<?php echo $data['id_voucher']; ?>" data-toggle="tooltip" title="Approve"><img src="img/approve.png"></a>
           <!-- 
           <img src="img/not-approve.png"> -->
           </center>
           <script>
           $(document).ready(function(){
               $('[data-toggle="tooltip"]').tooltip(); 
           });
           </script>
      </td>
     </tr>
     <?php 
     }
     ?>
       </table>
       </center>
       <br>
       <center>
       <div class="jenis_order">Order List Token PLN</div>
       <table cellspacing="0">
         <tr>
           <td style="border: 1px solid #34495e;" width="100px">Nomor</td>
           <td  style="border: 1px solid #34495e;" width="498px">Email</td>
           <td style="border: 1px solid #34495e;" width="100px">Meter PLN</td>
           <td style="border: 1px solid #34495e;" width="100px">Nominal</td>
           <td style="border: 1px solid #34495e;" width="100px"><center>Aksi</center></td>
         </tr>
         <?php
       include "inc/koneksi.php";

       $qData = "SELECT * FROM order_pln";

       $tampilData = mysqli_query($openServer, $qData);

       while ($data = mysqli_fetch_array($tampilData)){
    ?>
     <tr>
       <td style="border: 1px solid #34495e;"><?php echo $data['nomor']; ?></td>
       <td style="border: 1px solid #34495e;"><?php echo $data['email']; ?></td>
       <td style="border: 1px solid #34495e;"><?php echo $data['meter_pln']; ?></td>
       <td style="border: 1px solid #34495e;"><?php echo $data['nominal']; ?></td>
       <td style="border: 1px solid #34495e;"><center>
           <a href="?id-pln=<?php echo $data['id_pln']; ?>" data-toggle="tooltip" title="Approve"><img src="img/approve.png"></a>
           <!-- 
           <img src="img/not-approve.png"> -->
           </center>
           <script>
           $(document).ready(function(){
               $('[data-toggle="tooltip"]').tooltip(); 
           });
           </script>
      </td>
     </tr>
     <?php 
     }
     ?>
       </table>
       </center>
       <?php 

         include 'inc/koneksi.php';

         if (isset ($_GET['id-pulsa'])) {
           $id_order =$_GET['id-pulsa'];

           $statusPulsa = "UPDATE `order_pulsa` SET `status` = '1'  WHERE `id_order` ='$id_order'";
           $simpanUpdate = mysqli_query($openServer, $statusPulsa);

         } elseif (isset($_GET['id-voucher'])) {
           $id_voucher =$_GET['id-voucher'];

           $statusVoucher = "UPDATE `order_voucher` SET `status` = '1'  WHERE `id_voucher` ='$id_voucher'";
           $simpanUpdateVoucher = mysqli_query($openServer, $statusVoucher);

         } elseif (isset($_GET['id-pln'])) {
           $id_pln =$_GET['id-pln'];

           $statusPln = "UPDATE `order_pln` SET `status` = '1'  WHERE `id_pln` ='$id_pln'";
           $simpanUpdatePln = mysqli_query($openServer, $statusPln);

         }
       ?>
     </div>
   </div>
</body>
</html>
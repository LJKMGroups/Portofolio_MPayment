<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Edit Data Pelanggan</title>
  <link rel="stylesheet" href="css/edit-pelanggan.css">
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
         <span class="menu-select">Edit Data Pelanggan</span>
     </div>
     <div class="content">
       <?php
       include "inc/connection.php";

       $customerDate = $_GET['edit'];

       $qEdit = mysqli_query($openServer, "SELECT * FROM customer WHERE nama_depan = '$customerDate'");
       while ($data = mysqli_fetch_array($qEdit)){
        ?>

        <form action="edit-pelanggan.php" method="POST" accept-charset="utf-8">
         <center>
         <table>
           <tr>
             <td><input class="date" type="text" name="first" hidden="" value="<?php echo $data['nama_depan']; ?>"></td>
             <td><input class="date" type="text" name="last" hidden="" value="<?php echo $data['nama_belakang']; ?>"></td>
           </tr>
           <tr>
            <td><label>Nomor HP</label></td>  
            <td>: <input class="date" type="number" name="hp" value="<?php echo $data['no_hp']; ?>"></td>       
           </tr>
           <tr>
             <td><label>Email</label></td>
             <td>: <input class="date" type="email" name="email" value="<?php echo $data['email']; ?>"></td>
           </tr>
           <tr>
             <td><label>Tgl Lahir</label></td>
             <td>: <input class="date" type="date" name="birthday" value="<?php echo $data['tgl_lahir']; ?>"></td>
           </tr> 
           <tr>
             <td><label>Alamat</label></td>
             <td>: <input class="date" type="text" name="address" value="<?php echo $data['alamat']; ?>"></td>
           </tr>
           <tr>
             <td><br></td>
             <td><input class="maju" type="submit" name="edit" value="EDIT"></td>
           </tr>
       </table>
       </center>
       </form>

       <?php 
       }
       ?>

       <?php 
       if (isset($_POST['edit'])) {
         $first = $_POST['first'];
         $last = $_POST['last'];
         $hp = $_POST['hp'];
         $email = $_POST['email'];
         $birthday = $_POST['birthday'];
         $address = $_POST['address'];

         include "inc/connection.php";
         $saveCustomer = "UPDATE customer SET nama_belakang= '$last' , no_hp= '$hp' , email= '$email' , tgl_lahir= '$birthday' , alamat= '$address'  WHERE nama_depan = '$first'";
         $proccessData = mysqli_query($openServer, $saveCustomer);
         header('location:pelanggan.php');
       }
       ?>
     </div>
   </div>
</body>
</html>
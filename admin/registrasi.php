<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registrasi</title>
	<link rel="stylesheet" href="">
  <link rel="icon" href="img/icon.png">
</head>
<body>
  <form action="registrasi.php" method="POST" accept-charset="utf-8">
    <center>
    <table>
      <tr>
    	  <td><label>Nama</label></td>
    	  <td>: <input class="date" type="text" name="first" required="" placeholder="Nama Depan"></td>
      <tr>
        <td></td>
    	  <td>: <input class="date" type="text" name="last" required="" placeholder="Nama Belakang"></td>
      </tr>
      </tr>
      <tr>
    	 <td><label>Nomor HP</label></td>  
    	 <td>: <input class="date" type="number" name="hp" required="" placeholder="08xxxxxxxxxx" minlength="11"></td>   	  
      </tr>
      <tr>
      	<td><label>Email</label></td>
      	<td>: <input class="date" type="email" name="email" required="" placeholder="mail@domain.com" maxlength="33"></td>
      </tr>
      <tr>
      	<td><label>Tgl Lahir</label></td>
      	<td>: <input class="date" type="date" name="birthday" required=""></td>
      </tr>	
      <tr>
      	<td><label>Alamat</label></td>
      	<td>: <input class="date" type="text" name="address" required="" placeholder="Alamat Lengkap"></td>
      </tr>
      <tr>
      	<td><br></td>
      	<td><input class="maju" type="submit" name="register" value="REGISTRASI"></td>
      </tr>
	</table>
  </center>
  </form>
  <style type="text/css" media="screen">
    .date{
  height: 20px;
  width: 90%;
}
.maju{
  height: 22px;
  width: 250px;
  background-color: green;
  border: 1px solid green;
  color: #ffffff;
  font-weight: bolder;
}
label{
 font-family: "Open Sans";
 font-weight: bolder;
}
  </style>
  <?php 
  if (isset($_POST['register'])) {
  	$first = $_POST['first'];
  	$last = $_POST['last'];
  	$hp = $_POST['hp'];
  	$email = $_POST['email'];
  	$birthday = $_POST['birthday'];
  	$address = $_POST['address'];

  	include "inc/connection.php";
  	$regCustomer = "INSERT INTO `customer`(`nama_depan`, `nama_belakang`, `no_hp`, `email`, `tgl_lahir`, `alamat`) VALUES ( '$first' , '$last' , '$hp' , '$email' , '$birthday' , '$address' )";
  	$proccessData = mysqli_query($openServer, $regCustomer);
  	header('location:registrasi.php');
  }
  ?>
</body>
</html>
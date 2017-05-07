<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="css/login_style.css">
  <link rel="icon" href="img/icon.png">
</head>
<body>
  <div>
    <div class="login-txt">M-PAYMENT</div>
    <div class="login-session">Sign in to start your sesion</div>
    <form action="login.php" method="post" accept-charset="utf-8">
  	  <center><input class="user" type="text" name="username"></center>
  	  <br>
  	  <center><input class="pass" type="password" name="password"></center>
  	  <br>
  	  <center><input class="login-button" type="submit" name="login" value="login"></center>
    </form>
    <br>
    <div class="forgot">
      <a class="forgot" href="#">I forgot my password</a>
    </div>
    </div>
  <?php 
    if (isset($_POST['login'])) {
    	include "inc/connection.php";

    	$user = $_POST['username'];
    	$pass = md5($_POST['password']);

    	$aLogin = "SELECT * FROM login WHERE username='$user' and password='$pass'";
    	$Login = mysqli_query($openServer, $aLogin);

    	$cCek = mysqli_num_rows($Login);

      while ($baris = mysqli_fetch_array($Login)) {
        $nama = $baris['nama'];
        $user = $baris['username'];
      }

    	if ($cCek > 0) {
    		session_start();
    		$_SESSION['session admin'] = $nama;
        $_SESSION['user'] = $user;
    		header("location:dashboard.php");
    	}
    }
  ?>
</body>
</html>
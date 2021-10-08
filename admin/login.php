
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Log in</title>

  <link rel="shortcut icon" href="dist/img/sintech.PNG">
  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
</head>
<body>
<div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <img src="image/logolpjk.jpg" alt="logo" width="245px" style="margin-left:30px;"><br><br>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="username" name="user" class="form-control" placeholder="Username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <Input type="submit" name="login" Value="Login" class="btn btn-primary btn-block btn-flat">
        </div>
        <!-- /.col -->
      </div>
    </form>
	
	 <?php

session_start();
include "koneksi.php";

if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=md5($_POST['pass']);

$query=mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$user' and password='$pass' and level='3'");
$jml = mysqli_num_rows($query);

if($jml == 0){
  echo '<script language="javascript">alert("User atau pass salah!"); document.location="index.php";</script>';
}else{
  $row = mysqli_fetch_assoc($query);
            
  $_SESSION['id_user'] = $row['id_user'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['level'] = $row['level'];
            
    if($_SESSION['username']){ 
      echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="index.php";</script>';
    }
  }

}

?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>
</html>

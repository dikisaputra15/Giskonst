<h3>Halaman Login</h3>
<form action="" method="POST">
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-4">
      <input type="text" name="user" class="form-control" id="inputPassword3" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-4">
      <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <input type="submit" class="btn btn-primary" name="login" value="Login">
</form>

	<?php

if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=md5($_POST['pass']);

$query=mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$user' and password='$pass'");
$jml = mysqli_num_rows($query);

if($jml == 0){
  echo '<script language="javascript">alert("User atau pass salah!"); document.location="index.php";</script>';
}else{
  $row = mysqli_fetch_assoc($query);
            
  $_SESSION['id_user'] = $row['id_user'];
  $_SESSION['username'] = $row['username'];
  $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
  $_SESSION['level'] = $row['level'];
            
    if($_SESSION['username']){ 
      echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="index.php";</script>';
    }
  }

}

?>
<?php

$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
$title = "Profil";

$query = mysqli_query($koneksi, "select * from tb_user where id_user='$id_user'");
$data = mysqli_fetch_array($query);

?>

<div class="panel-heading centered">
   <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
</div>
<form action="" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-6">
      <input type="text" name="nama" class="form-control" id="inputEmail3" value="<?php echo $data['nama_lengkap']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="inputEmail3" value="<?php echo $data['email']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-6">
      <input type="text" name="user" class="form-control" id="inputPassword3" value="<?php echo $data['username']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" name="pass" class="form-control" id="inputPassword3" required>
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-6">
      <input type="submit" class="btn btn-primary" name="update" value="Update">
    </div>
  </div>
</form>

<?php
if (isset($_POST['update'])) {

	$nama = $_POST['nama'];
	$email = $_POST['email'];
  	$user = $_POST['user'];
	$pass = md5($_POST['pass']);

	mysqli_query($koneksi, "update tb_user set nama_lengkap='$nama', email='$email', username='$user', password='$pass' where id_user='$id_user'");

	?>
		<script type="text/javascript"> alert("Data Berhasil diupdate");
			window.location.href="?page=profil";
		</script> 
	<?php
}

?>
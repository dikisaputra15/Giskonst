
<h3 align="center">Halaman Pendaftaran Akun</h3>
<form action="" method="POST">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-6">
      <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-6">
      <input type="text" name="user" class="form-control" id="inputPassword3" placeholder="Username">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Role User</label>
    <input type="radio" name="role" value="0">pemilik jasa 
    <input type="radio" name="role" value="1">pencari jasa 
  </div>
  
  <div class="form-group row">
    <div class="col-sm-6">
      <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
    </div>
  </div>
</form>

<?php
if (isset($_POST['simpan'])) {

	$nama = $_POST['nama'];
	$email = $_POST['email'];
  $user = $_POST['user'];
	$role = $_POST['role'];
	$pass = md5($_POST['pass']);

	mysqli_query($koneksi, "insert into tb_user values('','$nama','$email','$user','$pass','$role')");

	?>
		<script type="text/javascript"> alert("Data Berhasil diBuat");
			window.location.href="?page=login";
		</script> 
	<?php
}

?>
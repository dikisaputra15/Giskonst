<?php
$id = $_GET['id'];
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
?>

<h3 align="center">Halaman Upload Penawaran</h3>
<form action="" method="POST" enctype="multipart/form-data">
<div class="col-sm-9">
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload Penawaran</label>
    <div class="col-sm-6">
      <input type="file" name="hps" class="form-control" id="inputPassword3">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-6">
      <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
    </div>
  </div>
  </div>
</form>


<?php 

if(isset($_POST['simpan'])){

	$sumber = $_FILES['hps']['tmp_name'];
	$target = "module/penawaran/";
	$hps = $_FILES['hps']['name'];

	move_uploaded_file($sumber, $target.$hps);

	mysqli_query($koneksi, "insert into tb_penawaran values('','$id','$id_user','$hps')");

	?>
		<script type="text/javascript"> alert("Data Berhasil diKirim");
			window.location.href="?page=module/berkas";
		</script> 
	<?php
}
?>
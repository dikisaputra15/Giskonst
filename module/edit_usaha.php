<?php
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
$id = $_GET['id'];

$qdit = mysqli_query($koneksi, "select * from tb_badan_usaha where id_badan_usaha = '$id'");
$dedit = mysqli_fetch_array($qdit);
$uploadf = $dedit['sertifikat'];

?>

<h3 align="center">Halaman Edit Badan Usaha</h3>
<form action="" method="POST" enctype="multipart/form-data">
<div class="col-sm-9">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
    <div class="col-sm-6">
      <input type="text" name="nama_perusahaan" class="form-control" id="inputEmail3" value="<?php echo $dedit['nama_perusahaan']; ?>">
    </div>
  </div> 
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NPWP</label>
    <div class="col-sm-6">
      <input type="text" name="npwp" class="form-control" id="inputEmail3" value="<?php echo $dedit['npwp']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Provinsi</label>
    <div class="col-sm-6">
      <input type="text" name="prov" class="form-control" id="inputEmail3" value="<?php echo $dedit['provinsi']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kota</label>
    <div class="col-sm-6">
      <input type="text" name="kota" class="form-control" id="inputEmail3" value="<?php echo $dedit['kota']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Lengkap</label>
    <div class="col-sm-6">
     <textarea name="alamat" style="width: 390px; height: 200px;"><?php echo $dedit['alamat']; ?></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" class="form-control" id="inputPassword3" value="<?php echo $dedit['email']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Website</label>
    <div class="col-sm-6">
      <input type="text" name="website" class="form-control" id="inputPassword3" value="<?php echo $dedit['website']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-6">
       <textarea name="deskripsi" style="width: 390px; height: 200px;"><?php echo $dedit['deskripsi']; ?></textarea>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Latitude</label>
    <div class="col-sm-6">
      <input type="text" name="latitude" class="form-control" id="inputPassword3" value="<?php echo $dedit['latitude']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Longitude</label>
    <div class="col-sm-6">
      <input type="text" name="longitude" class="form-control" id="inputPassword3" value="<?php echo $dedit['longitude']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Upload Sertifikasi</label>
    <div class="col-sm-6">
      <input type="file" name="sertifikat" class="form-control" id="inputPassword3">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-6">
      <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
    </div>
  </div>
</form>
 </div>

<div class="col-sm-3">
<h3>Perhatian!!!</h3>
<p>untuk mendapatkan logitude dan latitude silahkan klik tombol dibawah ini</p>
<p>tulis nama kota</p>
<p>setelah lokasi didapatkan silahkan copy dan paste kan ke form longitude dan latitude</p>
<center>
<a href="https://www.latlong.net/" class="btn btn-primary" target="__blank">Cek Lokasi</a>
</center>
</div>


</div>

<?php 

if(isset($_POST['simpan'])){

	$status = "menunggu verifikasi";
	$nama_perusahaan = $_POST['nama_perusahaan'];
	$npwp = $_POST['npwp'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];
	$website = $_POST['website'];
	$deskripsi = $_POST['deskripsi'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$prov = $_POST['prov'];
	$kota = $_POST['kota'];

	$sumber = $_FILES['sertifikat']['tmp_name'];
	$target = "module/sertifikat/";
	$sertifikat = $_FILES['sertifikat']['name'];

	if($sertifikat == ""){
		mysqli_query($koneksi, "update tb_badan_usaha set id_user='$id_user', nama_perusahaan='$nama_perusahaan', npwp='$npwp', alamat='$alamat', provinsi='$prov', kota='$kota', email='$email', website='$website', deskripsi='$deskripsi', longitude='$longitude', latitude='$latitude' where id_badan_usaha='$id'");

			?>
				<script type="text/javascript"> alert("Data Berhasil diKirim");
					window.location.href="?page=module/data_kons";
				</script> 
			<?php
	}else{

		move_uploaded_file($sumber, $target.$sertifikat);

		mysqli_query($koneksi, "update tb_badan_usaha set id_user='$id_user', nama_perusahaan='$nama_perusahaan', npwp='$npwp', alamat='$alamat', provinsi='$prov', kota='$kota', email='$email', website='$website', deskripsi='$deskripsi', longitude='$longitude', latitude='$latitude', sertifikat='$sertifikat' where id_badan_usaha='$id'");

		?>
			<script type="text/javascript"> alert("Data Berhasil diKirim");
				window.location.href="?page=module/data_kons";
			</script> 
		<?php
	}
}
?>
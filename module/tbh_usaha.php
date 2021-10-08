<?php
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
?>

<h3 align="center">Halaman Tambah Badan Usaha</h3>
<form action="" method="POST" enctype="multipart/form-data">
<div class="col-sm-9">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
    <div class="col-sm-6">
      <input type="text" name="nama_perusahaan" class="form-control" id="inputEmail3" placeholder="Nama Perusahaan">
    </div>
  </div> 
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">NPWP</label>
    <div class="col-sm-6">
      <input type="text" name="npwp" class="form-control" id="inputEmail3" placeholder="NPWP">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Provinsi</label>
    <div class="col-sm-6">
      <input type="text" name="prov" class="form-control" id="inputEmail3" placeholder="Provinsi">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Kota</label>
    <div class="col-sm-6">
      <input type="text" name="kota" class="form-control" id="inputEmail3" placeholder="Kota">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Alamat Lengkap</label>
    <div class="col-sm-6">
     <textarea name="alamat" style="width: 390px; height: 200px;"></textarea>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="text" name="email" class="form-control" id="inputPassword3" placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Website</label>
    <div class="col-sm-6">
      <input type="text" name="website" class="form-control" id="inputPassword3" placeholder="Website">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
    <div class="col-sm-6">
       <textarea name="deskripsi" style="width: 390px; height: 200px;"></textarea>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Latitude</label>
    <div class="col-sm-6">
      <input type="text" name="latitude" class="form-control" id="inputPassword3" placeholder="latitude">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Longitude</label>
    <div class="col-sm-6">
      <input type="text" name="longitude" class="form-control" id="inputPassword3" placeholder="longitude">
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

	move_uploaded_file($sumber, $target.$sertifikat);

	mysqli_query($koneksi, "insert into tb_badan_usaha values('','$id_user','$nama_perusahaan','$npwp','$alamat','$prov','$kota','$email','$website','$deskripsi','$longitude','$latitude','$sertifikat','$status')");

	?>
		<script type="text/javascript"> alert("Data Berhasil diKirim");
			window.location.href="?page=module/data_kons";
		</script> 
	<?php
}
?>
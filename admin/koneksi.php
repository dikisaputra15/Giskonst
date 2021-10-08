<?php 

$koneksi = mysqli_connect("localhost","root","","db_sig");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
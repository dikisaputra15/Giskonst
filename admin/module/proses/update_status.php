<?php
$id = $_GET['id'];
$tgl = date('Y-m-d');

$masuk = mysqli_query($koneksi, "update tb_badan_usaha set status='terverifikasi' where id_badan_usaha='$id'");

if($masuk){
	mysqli_query($koneksi, "insert into tb_pengajuan_bu values('','$id','$tgl')");

?>
    <script type="text/javascript"> alert("Data Berhasil dupdate");
        window.location.href="?page=module/proses/pengajuan";
    </script> 
<?php

}


?>
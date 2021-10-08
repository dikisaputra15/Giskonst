<?php
$id = $_GET['id'];

mysqli_query($koneksi, "delete from tb_badan_usaha where id_badan_usaha='$id'");
?>
    <script type="text/javascript"> alert("Data Berhasil dihapus");
        window.location.href="?page=module/proses/pengajuan";
    </script> 
<?php

?>
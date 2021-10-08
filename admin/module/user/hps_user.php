<?php
$id = $_GET['id'];

mysqli_query($koneksi, "delete from tb_user where id_user='$id'");
?>
    <script type="text/javascript"> alert("Data Berhasil dihapus");
        window.location.href="?page=module/user/d_user";
    </script> 
<?php

?>
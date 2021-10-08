<?php
$id = $_GET['id'];

mysql_query("delete from tb_foto where id_foto='$id'");
?>
    <script type="text/javascript"> alert("Data Berhasil dihapus");
        window.location.href="?page=module/galerry/list_gal";
    </script> 
<?php

?>
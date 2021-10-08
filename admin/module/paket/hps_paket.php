<?php
$id = $_GET['id'];

mysql_query("delete from tb_paket where id_paket='$id'");
?>
    <script type="text/javascript"> alert("Data Berhasil dihapus");
        window.location.href="?page=module/paket/list_paket";
    </script> 
<?php

?>
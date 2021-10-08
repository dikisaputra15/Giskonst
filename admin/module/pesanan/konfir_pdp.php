<?php	

	$id = $_GET['id'];
	
	mysql_query("update tb_pesan_reg set status=4 where id_pesan='$id'");
	?>
		<script type="text/javascript"> alert("Konfirmasi Berhasil");
			window.location.href="index.php?page=module/pesanan/list_pesdp";
		</script> 
	<?php
?>
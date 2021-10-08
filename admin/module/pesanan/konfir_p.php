<?php	

	$id = $_GET['id'];
	
	mysql_query("update tb_pesan_reg set status=3 where id_pesan='$id'");
	?>
		<script type="text/javascript"> alert("Konfirmasi Berhasil");
			window.location.href="index.php?page=module/pesanan/d_pesan";
		</script> 
	<?php
?>
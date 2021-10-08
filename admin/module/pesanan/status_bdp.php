<?php	
	@session_start();
	$id = $_GET['id'];
?>
 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail pesanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Pemesan</th>
                  <th>Foto Slip Pembayaran</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$query = mysql_query("select tb_bayar .*, tb_detail_pesan_reg.id_pesan,tb_detail_pesan_reg.user_id,tb_detail_pesan_reg.tgl_main,
					tb_detail_pesan_reg.jam_main,tb_detail_pesan_reg.total, user.user_id,user.nama_lengkap,user.alamat,user.no_telp
					from tb_bayar join tb_detail_pesan_reg on tb_bayar.id_pesan=tb_detail_pesan_reg.id_pesan join user on tb_bayar.user_id=
					user.user_id where tb_detail_pesan_reg.id_pesan='$id'");
				while($data = mysql_fetch_array($query)){
				
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama_lengkap']; ?></td>
						<td><a href="../img/buktibayar/<?php echo $data['upload_slip']; ?>"><img src="../img/buktibayar/<?php echo $data['upload_slip']; ?>" width="50px" height="50px"></a></td>
					</tr>
				<?php
					}
				?>
				
				</tbody>
              </table>
			
            </div>
            <!-- /.box-body -->
          </div>
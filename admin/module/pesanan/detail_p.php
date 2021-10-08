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
                  <th>Tgl Pesan</th>
                  <th>Nama Pemesan</th>
                  <th>Jam Main</th>
                  <th>No Handphone</th>
                  <th>status</th>
                  <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$query = mysql_query("select tb_detail_pesan_reg .*, tb_pesan_reg.id_pesan,tb_pesan_reg.nama_penerima,
						tb_pesan_reg.no_hp,tb_pesan_reg.alamat,tb_pesan_reg.status, user.no_telp from tb_detail_pesan_reg join tb_pesan_reg on
						tb_detail_pesan_reg.id_pesan=tb_pesan_reg.id_pesan join user on tb_detail_pesan_reg.user_id=user.user_id where tb_detail_pesan_reg.id_pesan='$id'");
				while($data = mysql_fetch_array($query)){
				$status = $data['status'];
				$harga=$data['total'];
				$total+=$data['total'];
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['tgl_main']; ?></td>
						<td><?php echo $data['nama_penerima']; ?></td>
						<td><?php echo $data['jam_main']; ?></td>
						<td><?php echo $data['no_telp']; ?></td>
						<td><?php echo $arraystatus[$status]; ?></td>
						<td><?php echo $harga; ?></td>
					</tr>
				<?php
					}
				?>
				<tr>
					<td>Total</td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><?php echo $total; ?></td>
				</tr>
				</tbody>
              </table>
			
            </div>
            <!-- /.box-body -->
          </div>
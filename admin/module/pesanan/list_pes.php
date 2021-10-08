
 <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Pemesanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tgl Pesan</th>
                  <th>Nama Pemesan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$query = mysql_query("select tb_detail_pesan_reg .*, tb_pesan_reg.id_pesan,tb_pesan_reg.nama_penerima,
						tb_pesan_reg.no_hp,tb_pesan_reg.alamat,tb_pesan_reg.status from tb_detail_pesan_reg join tb_pesan_reg on
						tb_detail_pesan_reg.id_pesan=tb_pesan_reg.id_pesan where tb_pesan_reg.status=2");
				while($data = mysql_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['tgl_main']; ?></td>
						<td><?php echo $data['nama_penerima']; ?></td>
						<td>
						<ul style="list-style:none;">
							<li>
								<a href="?page=module/pesanan/detail_p&id=<?php echo $data['id_pesan']; ?>" class="btn btn-primary">Detail</a>
								<a href="?page=module/pesanan/status_b&id=<?php echo $data['id_pesan']; ?>" class="btn btn-primary">Lihat Status Bayar</a>
								<a href="?page=module/pesanan/konfir_p&id=<?php echo $data['id_pesan']; ?>" class="btn btn-primary">Konfir Pesanan</a>
							</li>
						</ul>
						</td>
					</tr>
				<?php
					}
				?>
				</tbody>
              </table>
			  
            </div>
            <!-- /.box-body -->
          </div>
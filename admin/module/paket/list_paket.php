 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Paket Pemesanan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Paket</th>
                  <th>Harga</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$query = mysql_query("select * from tb_paket");
				while($data = mysql_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama_paket']; ?></td>
						<td><?php echo $data['harga']; ?></td>
						<td>
						<ul style="list-style:none;">
							<li>
								<a href="?page=module/paket/edt_paket&id=<?php echo $data['id_paket']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('yakin ingin menghapus data ?')"  href="?page=module/paket/hps_paket&id=<?php echo $data['id_paket']; ?>" title="Delete"><i class="fa fa-trash-o"></i></a>
							</li>
						</ul>
						</td>
					</tr>
				<?php
					}
				?>
				</tbody>
              </table>
			  <a href="?page=module/paket/tambah_paket" class="btn btn-primary">Tambah Paket</a>
            </div>
            <!-- /.box-body -->
          </div>
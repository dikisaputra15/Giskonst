 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengajuan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>NPWP</th>
                  <th>Alamat</th>
                  <th>Provinsi</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>Sertifikasi</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$query = mysqli_query($koneksi, "select * from tb_badan_usaha");
				while($data = mysqli_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama_perusahaan']; ?></td>
						<td><?php echo $data['npwp']; ?></td>
						<td><?php echo $data['alamat']; ?></td>
						<td><?php echo $data['provinsi']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['website']; ?></td>
						<td><a href="../module/sertifikat/<?php echo $data['sertifikat']; ?>">Sertifikasi</a></td>
						<td><?php echo $data['status']; ?></td>
						<td>
							<a href="?page=module/proses/update_status&id=<?php echo $data['id_badan_usaha']; ?>" title="Terima"><i class="fa fa-file"></i></a>
              <a href="?page=module/proses/tolak&id=<?php echo $data['id_badan_usaha']; ?>" title="Tolak"><i class="fa fa-edit"></i></a>
							<a href="?page=module/proses/hapus&id=<?php echo $data['id_badan_usaha']; ?>" title="Delete"><i class="fa fa-trash-o"></i></a>
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
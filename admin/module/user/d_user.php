 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <a href="?page=module/user/tambah_usr" class="btn btn-primary">+Tambah Data</a><br><br>
              <table class="table table-bordered table-striped" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$query = mysqli_query($koneksi, "select * from tb_user");
				while($data = mysqli_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama_lengkap']; ?></td>
						<td><?php echo $data['email']; ?></td>
						<td><?php echo $data['username']; ?></td>
						<td>
						<ul style="list-style:none;">
							<li>
								<a href="?page=module/user/edt_user&id=<?php echo $data['id_user']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('yakin ingin menghapus data ?')"  href="?page=module/user/hps_user&id=<?php echo $data['id_user']; ?>" title="Delete"><i class="fa fa-trash-o"></i></a>
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
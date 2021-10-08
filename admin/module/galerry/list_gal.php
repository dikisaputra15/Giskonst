 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Photo alat - alat musik</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Photo</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$query = mysql_query("select * from tb_foto");
				while($data = mysql_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><img src="image/galery/<?php echo $data['upload_foto']; ?>" width="50px" height="50px"></td>
						<td>
						<ul style="list-style:none;">
							<li>
								<a onclick="return confirm('yakin ingin menghapus data ?')"  href="?page=module/galerry/hps_gal&id=<?php echo $data['id_foto']; ?>" title="Delete"><i class="fa fa-trash-o"></i></a>
							</li>
						</ul>
					</td>
					</tr>
				<?php
					}
				?>
				</tbody>
              </table>
			  <a href="?page=module/galerry/tambah_gal" class="btn btn-primary">Tambah Data</a>
            </div>
            <!-- /.box-body -->
          </div>
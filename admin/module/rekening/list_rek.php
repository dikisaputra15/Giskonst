 <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Rekening Studio Musik Ziza</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-striped" id="datatables">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Bank</th>
                  <th>Atas Nama</th>
                  <th>No Rekening</th>
                  <th>Gambar</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php
				$no=1;
				$query = mysql_query("select * from tb_rekening");
				while($data = mysql_fetch_array($query)){
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data['nama_bank']; ?></td>
						<td><?php echo $data['atas_nama']; ?></td>
						<td><?php echo $data['no_rek']; ?></td>
						<td><img src="image/rekening/<?php echo $data['gambar']; ?>" width="50px" height="50px"></td>
						<td><?php echo $data['status']; ?></td>
						<td>
						<ul style="list-style:none;">
							<li>
								<a href="?page=module/rekening/edt_rek&id=<?php echo $data['id_rek']; ?>" title="Edit"><i class="fa fa-edit"></i></a>
								<a onclick="return confirm('yakin ingin menghapus data ?')"  href="?page=module/rekening/hps_rek&id=<?php echo $data['id_rek']; ?>" title="Delete"><i class="fa fa-trash-o"></i></a>
							</li>
						</ul>
					</td>
					</tr>
				<?php
					}
				?>
				</tbody>
              </table>
			  <a href="?page=module/rekening/tambah_rek" class="btn btn-primary">Tambah Data</a>
            </div>
            <!-- /.box-body -->
          </div>
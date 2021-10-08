<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Paket Pemesanan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Nama Paket</label><br>
				  <input type="text" name="nama" class="form-control" required>
                </div>
              </div>
			  <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Harga</label><br>
				  <input type="text" name="harga" class="form-control" required>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Tambah" name="tambah">
              </div>
            </form>
			<?php
				if(isset($_POST['tambah'])){
				$nama = $_POST['nama'];
				$harga = $_POST['harga'];
				
					mysql_query("insert into tb_paket values('','$nama','$harga')");
					?>
						<script type="text/javascript"> alert("Data Berhasil diTambah");
							window.location.href="index.php?page=module/paket/list_paket";
						</script> 
					<?php
				
				}
			?>
          </div>
</div> 

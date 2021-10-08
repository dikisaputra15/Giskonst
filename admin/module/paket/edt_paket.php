<?php 
 
 $id = $_GET['id'];
 $query = mysql_query("select * from tb_paket where id_paket='$id'");
 $data = mysql_fetch_array($query);
 
 ?>
 
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Paket</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Nama Paket</label><br>
				  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_paket']; ?>" required>
                </div>
              </div>
			  <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Harga</label><br>
				  <input type="text" name="harga" class="form-control" value="<?php echo $data['harga']; ?>" required>
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Update" name="update">
              </div>
            </form>
			<?php
				if(isset($_POST['update'])){
				$nama = $_POST['nama'];
				$harga = $_POST['harga'];
				
					mysql_query("update tb_paket set nama_paket='$nama', harga='$harga' where id_paket='$id'");
					?>
						<script type="text/javascript"> alert("Data Berhasil diupdate");
							window.location.href="index.php?page=module/paket/list_paket";
						</script> 
					<?php
				
				}
			?>
          </div>
</div> 

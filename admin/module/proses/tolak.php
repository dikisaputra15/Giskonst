<?php 
 
 $id = $_GET['id'];
 
 ?>
 
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tolak Permohonan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Alasan / Keterangan</label><br>
				  <input type="text" name="ket" class="form-control" required>
                </div>
              </div>
			 
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Update" name="update">
              </div>
            </form>
			<?php
				if(isset($_POST['update'])){
				$ket = $_POST['ket'];
				
				
					mysqli_query($koneksi, "update tb_user set status='$ket' where id_badan_usaha='$id'");
					?>
						<script type="text/javascript"> alert("Data Berhasil diupdate");
							window.location.href="index.php?page=module/proses/pengajuan";
						</script> 
					<?php
				
				}
			?>
          </div>
</div> 

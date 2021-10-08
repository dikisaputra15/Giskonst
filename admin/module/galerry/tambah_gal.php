<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Foto Foto</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST" enctype="multipart/form-data">
			   <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Photo</label><br>
                  <input type="file" name="foto" id="exampleInputFile" required>
                </div>
              </div>

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Tambah" name="tambah">
              </div>
            </form>
			<?php
				if(isset($_POST['tambah'])){
		
				$foto=$_FILES['foto']['name'];
				$path_foto=$_FILES['foto']['tmp_name'];
				$ukuran_foto = $_FILES['foto']['size'];
				$dir_foto="image/galery/$foto";
				
				$simpan = mysql_query("insert into tb_foto values('','$foto')");
				if($simpan){
				move_uploaded_file($path_foto, $dir_foto);
				?>
					<script type="text/javascript"> alert("Data Berhasil diTambah");
						window.location.href="index.php?page=module/galerry/list_gal";
					</script> 
				<?php
				}
				}
			?>
          </div>
</div> 

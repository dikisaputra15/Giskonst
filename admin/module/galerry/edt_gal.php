 <?php 
 
 $id = $_GET['id'];
 $query = mysql_query("select * from tb_galerry where id_galery='$id'");
 $data = mysql_fetch_array($query);
 
 ?>
 
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Peta Rencana Tata Kota</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Judul Rencana</label><br>
				  <input type="text" name="judul" class="form-control" value="<?php echo $data['judul_keg']; ?>">
                </div>
              </div>
			   <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Photo Peta</label><br>
				    <img src="image/galerry/<?php echo $data['photo']; ?>" width="500px" height="350px"><br><br>
                  <input type="file" name="foto" id="exampleInputFile">
                </div>
              </div>

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Tambah" name="tambah">
              </div>
            </form>
			<?php
				if(isset($_POST['tambah'])){
				$judul = $_POST['judul'];
				
				$foto=$_FILES['foto']['name'];
				$path_foto=$_FILES['foto']['tmp_name'];
				$ukuran_foto = $_FILES['foto']['size'];
				$dir_foto="image/galerry/$foto";
				
				if($foto == ""){
						mysql_query("update tb_galerry set judul_keg='$judul' where id_galery='$id'");
						 ?>
							<script type="text/javascript"> alert("Data Berhasil diupdate");
							  window.location.href="index.php?page=module/galerry/list_gal";
							</script> 
						<?php
					}else{
						move_uploaded_file($path_foto, $dir_foto);
						mysql_query("update tb_galerry set judul_keg='$judul', photo='$foto' where id_galery='$id'");
						?>
							<script type="text/javascript"> alert("Data Berhasil diupdate");
							  window.location.href="index.php?page=module/galerry/list_gal";
							</script> 
						<?php
					}
				}
			?>
          </div>
</div> 

 <?php 
 
 $id = $_GET['id'];
 $query = mysql_query("select * from tb_rekening where id_rek='$id'");
 $data = mysql_fetch_array($query);
 $status = $data['status'];
 
 ?>
 
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Rekening</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                 <div class="form-group">
                  <label for="exampleInputFile">Nama Bank</label><br>
                  <input type="text" class="form-control" name="nama" id="exampleInputFile" value="<?php echo $data['nama_bank']; ?>" required>
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Atas Nama</label><br>
                  <input type="text" class="form-control" name="atas_nama" id="exampleInputFile" value="<?php echo $data['atas_nama']; ?>" required>
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Nomor Rekening</label><br>
                  <input type="text" class="form-control" name="norek" value="<?php echo $data['no_rek']; ?>" id="exampleInputFile" required>
                </div>
              </div>
			   <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Gambar</label><br>
				    <img src="image/rekening/<?php echo $data['gambar']; ?>" width="500px" height="350px"><br><br>
                  <input type="file" name="foto" id="exampleInputFile">
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">status</label><br>
                  <input type="radio" name="status" value="on" <?php if($status == "on"){ echo "checked='true'"; } ?> >on
                  <input type="radio" name="status" value="off" <?php if($status == "off"){ echo "checked='true'"; } ?>>off
                </div>
              </div>

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Update" name="update">
              </div>
            </form>
			<?php
				if(isset($_POST['update'])){
				$nama = $_POST['nama'];
				$atas_nama = $_POST['atas_nama'];
				$norek = $_POST['norek'];
				$status = $_POST['status'];
				
				$foto=$_FILES['foto']['name'];
				$path_foto=$_FILES['foto']['tmp_name'];
				$ukuran_foto = $_FILES['foto']['size'];
				$dir_foto="image/rekening/$foto";
				
				if($foto == ""){
						mysql_query("update tb_rekening set nama_bank='$nama', atas_nama='$atas_nama', no_rek='$norek', status='$status' where id_rek='$id'");
						 ?>
							<script type="text/javascript"> alert("Data Berhasil diupdate");
							  window.location.href="index.php?page=module/rekening/list_rek";
							</script> 
						<?php
					}else{
						move_uploaded_file($path_foto, $dir_foto);
						mysql_query("update tb_rekening set nama_bank='$nama', atas_nama='$atas_nama', no_rek='$norek', gambar='$foto', status='$status' where id_rek='$id'");
						?>
							<script type="text/javascript"> alert("Data Berhasil diupdate");
							  window.location.href="index.php?page=module/rekening/list_rek";
							</script> 
						<?php
					}
				}
			?>
          </div>
</div> 

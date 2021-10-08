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
                  <label for="exampleInputFile">Nama Bank</label><br>
                  <input type="text" class="form-control" name="nama" id="exampleInputFile" required>
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Atas Nama</label><br>
                  <input type="text" class="form-control" name="atas_nama" id="exampleInputFile" required>
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Nomor Rekening</label><br>
                  <input type="text" class="form-control" name="norek" id="exampleInputFile" required>
                </div>
				<div class="form-group">
                  <label for="exampleInputFile">Gambar</label><br>
                  <input type="file" name="foto" id="exampleInputFile" required>
                </div>
              </div>

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Tambah" name="tambah">
              </div>
            </form>
			<?php
				if(isset($_POST['tambah'])){
				
				$nama = $_POST['nama'];
				$atas_nama = $_POST['atas_nama'];
				$norek = $_POST['norek'];
				$foto=$_FILES['foto']['name'];
				$path_foto=$_FILES['foto']['tmp_name'];
				$ukuran_foto = $_FILES['foto']['size'];
				$dir_foto="image/rekening/$foto";
				
				$simpan = mysql_query("insert into tb_rekening values('','$nama','$atas_nama','$norek','$foto','on')");
				if($simpan){
				move_uploaded_file($path_foto, $dir_foto);
				?>
					<script type="text/javascript"> alert("Data Berhasil diTambah");
						window.location.href="index.php?page=module/rekening/list_rek";
					</script> 
				<?php
				}
				}
			?>
          </div>
</div> 

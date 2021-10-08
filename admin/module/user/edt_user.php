<?php 
 
 $id = $_GET['id'];
 $query = mysqli_query($koneksi, "select * from tb_user where id_user='$id'");
 $data = mysqli_fetch_array($query);
 $level = $data['level'];
 
 ?>
 
<div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Nama Lengkap</label><br>
				  <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_lengkap']; ?>" required>
                </div>
              </div>
			  <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Email</label><br>
          <input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>" required>
                </div>
              </div> 
          <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Username</label><br>
				  <input type="text" name="user" class="form-control" value="<?php echo $data['username']; ?>" required>
                </div>
              </div>
			  <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Password</label><br>
				  <input type="text" name="pass" class="form-control" required>
                </div>
              </div>
			  <div class="box-body">
                <div class="form-group">
                    <label>Level</label><br>
					<input type="radio" value="0" name="level" <?php if($level == "0"){ echo "checked"; } ?> /> pemilik jasa
          <input type="radio" value="1" name="level" <?php if($level == "1"){ echo "checked"; } ?> /> pencari jasa
					<input type="radio" value="3" name="level" <?php if($level == "3"){ echo "checked"; } ?> /> admin
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" value="Update" name="update">
              </div>
            </form>
			<?php
				if(isset($_POST['update'])){
				$nama = $_POST['nama'];
				$email = $_POST['email'];
        $user = $_POST['user'];
				$pass = $_POST['pass'];
				$level = $_POST['level'];
				
					mysqli_query($koneksi, "update tb_user set nama_lengkap='$nama', email='$email', username='$user', password='$pass', level='$level' where id_user='$id'");
					?>
						<script type="text/javascript"> alert("Data Berhasil diupdate");
							window.location.href="index.php?page=module/user/d_user";
						</script> 
					<?php
				
				}
			?>
          </div>
</div> 

 <div class="col-md-6">
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Form Tambah User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Lengkap</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama_lengkap" placeholder="Nama Lengkap">
                </div> 
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
                </div>
                 <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="user" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Role Id</label><br>
                   <input type="radio" name="role" value="0">pemilik jasa 
    				<input type="radio" name="role" value="1">pencari jasa 
    				<input type="radio" name="role" value="3">admin 
                </div>
               
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" name="simpan" class="btn btn-primary" value="Simpan">
              </div>
            </form>
          </div>
          </div>

          <?php
			if (isset($_POST['simpan'])) {

				$nama = $_POST['nama_lengkap'];
				$email = $_POST['email'];
			  $user = $_POST['user'];
				$role = $_POST['role'];
				$pass = md5($_POST['pass']);

				mysqli_query($koneksi, "insert into tb_user values('','$nama','$email','$user','$pass','$role')");

				?>
					<script type="text/javascript"> alert("Data Berhasil diBuat");
						window.location.href="?page=module/user/d_user";
					</script> 
				<?php
}
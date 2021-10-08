<?php 
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
$title = "Halaman Penawaran";
?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin" id="example1" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>Nama Pencari jasa</th>
                  <th>email Pencari jasa</th>
                  <th>File Penawaran</th>
                </tr>
              </thead>
              <tbody>
              <?php
              	$no=1;
               if($_SESSION['level']=='0'){
                $query = mysqli_query($koneksi, "select tb_penawaran.*, tb_badan_usaha.id_badan_usaha,tb_badan_usaha.nama_perusahaan, tb_user.id_user,tb_user.nama_lengkap,tb_user.email from tb_penawaran join tb_badan_usaha on tb_penawaran.id_badan_usaha=tb_badan_usaha.id_badan_usaha join tb_user on tb_penawaran.id_user=tb_user.id_user");
            	}else{
            		$query = mysqli_query($koneksi, "select tb_penawaran.*, tb_badan_usaha.id_badan_usaha,tb_badan_usaha.nama_perusahaan, tb_user.id_user,tb_user.nama_lengkap,tb_user.email from tb_penawaran join tb_badan_usaha on tb_penawaran.id_badan_usaha=tb_badan_usaha.id_badan_usaha join tb_user on tb_penawaran.id_user=tb_user.id_user where tb_user.id_user='$id_user'");	
            	}
                while($data = mysqli_fetch_array($query)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_perusahaan']; ?></td>
                <td><?php echo $data['nama_lengkap']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><a target="__blank" href="module/penawaran/<?php echo $data['file_penawaran']; ?>">file penawaran</a></td>
              </tr>
             	<?php
					}
				?>              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

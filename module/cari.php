<?php 
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
$provinsi = $_POST['provinsi'];
$title = "Data Jasa Konstruksi Provinsi " .$provinsi;
?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>NPWP</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>provinsi</th>
                  <th>status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              	$no=1;
                $query = mysqli_query($koneksi, "select * from tb_badan_usaha where provinsi='$provinsi' and status='terverifikasi'");
                while($data = mysqli_fetch_array($query)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_perusahaan']; ?></td>
                <td><?php echo $data['npwp']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['website']; ?></td>
                <td><?php echo $data['provinsi']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a href="index.php?page=detail_usaha&id=<?php echo $data['id_badan_usaha']; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                </td>
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

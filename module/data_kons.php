<?php 
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;
$title = "Data Jasa Konstruksi";
?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
            <a href="?page=module/tbh_usaha" class="btn btn-primary">+Ajukan Badan Usaha</a></br></br>
              <table class="table table-bordered table-striped table-admin" id="example1" >
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Perusahaan</th>
                  <th>NPWP</th>
                  <th>Email</th>
                  <th>Website</th>
                  <th>sertifikasi</th>
                  <th>status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
              	$no=1;
                $query = mysqli_query($koneksi, "select * from tb_badan_usaha where id_user='$id_user'");
                while($data = mysqli_fetch_array($query)){
              ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_perusahaan']; ?></td>
                <td><?php echo $data['npwp']; ?></td>
                <td><?php echo $data['email']; ?></td>
                <td><?php echo $data['website']; ?></td>
                <td><a target="__blank" href="module/sertifikat/<?php echo $data['sertifikat']; ?>">sertifikasi</a></td>
                <td><?php echo $data['status']; ?></td>
                <td class="ctr">
                  <div class="btn-group">
                    <a href="index.php?page=detail_usaha&id=<?php echo $data['id_badan_usaha']; ?>" rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                    <i class="fa fa-map-marker"> </i> Detail dan Lokasi</a>&nbsp;
                  </div>
                  <div class="btn-group">
                    <a href="?page=module/edit_usaha&id=<?php echo $data['id_badan_usaha']; ?>" class="btn btn-primary">Edit</a>
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

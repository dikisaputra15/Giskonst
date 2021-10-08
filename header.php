<?php
session_start();
$id_user = isset($_SESSION['id_user']) ? $_SESSION['id_user'] : false;

$sql_user=mysqli_query($koneksi, "select * from tb_user where id_user='$id_user'");
$data_user=mysqli_fetch_array($sql_user);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/datatable-bootstrap.css" rel="stylesheet">
     <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="tengah">
          <div class="head-depan tengah">
            <div class="row">
              <div class="col-md-1">
                <img class="img-responsive margin-b10" src="img/logo-logo.png" width="100" height="100" alt="Logo SMA Karangan" />
              </div>
              <div class="col-md-11">
                <h1 class="judul-head">Sistem Informasi Geografis Jasa Konstruksi</h1>
                <p><i class="fa fa-map-marker fa-fw"></i> Sistem Informasi yang memuat data jasa-jasa penyedia Jasa Konstruksi</p>
              </div>
            </div>
            <?php if($id_user){ ?>
            <form action="?page=module/cari" method="POST">
            <div class="col-sm-12">
            <div class="col-sm-6">
            <input type="text" class="form-control" name="provinsi" placeholder="Cari Provinsi">
            </div>
            <div class="col-sm-3">
              <input type="submit" name="cari" value="Cari" class="btn btn-primary">
            </div>
          </div>
          </form>
          <?php } ?>
          <br>
            <hr class="hr1 margin-b-10" />
          </div>
        </div>
      </div>
    </div>

    <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Status</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
        
            <li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
            <?php
              if($id_user){?>

              <?php if($_SESSION['level']=='0'){ ?>
              <li><a href="?page=module/data_kons"><i class="fa fa-list-ul"></i> DATA JASA KONSTRUKSI</a></li>
              <?php } ?>
              
              <li><a href="?page=module/berkas"><i class="fa fa-list-ul"></i>BERKAS PENAWARAN</a></li>
              <li><a href="?page=peta_kons"><i class="fa fa-map-marker"></i> PETA JASA KONSTRUKSI</a></li>
              <li><a class="dropdown-item" href="?page=profil">PROFIL,<?php echo $data_user['nama_lengkap']; ?></a></li>
              <li><a class="dropdown-item" href="logout.php">LOGOUT</a></li>
            <?php }else{ ?>
              <li><a href="?page=module/daftar"><i class="fa fa-list-ul"></i>DAFTAR</a></li>
              <li><a href="?page=login"><i class="fa fa-user"></i>LOGIN</a></li>
            <?php } ?>
            
            <!--<li><a href="about.php" data-toggle="modal" data-target="#about"><i class="fa fa-user"></i> ABOUT</a></li>-->
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
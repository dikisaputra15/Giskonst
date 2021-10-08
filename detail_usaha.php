<?php 
$id = $_GET['id'];
include_once "ambil_usaha.php";
$obj = json_decode($data);
$titles="";
$npwp="";
$provinsi="";
$kota="";
$alamat="";
$email="";
$website="";
$deskripsi="";
$longitude="";
$latitude="";
$status="";

foreach($obj->results as $item){
  $titles.=$item->nama_perusahaan;
  $npwp.=$item->npwp;
  $provinsi.=$item->provinsi;
  $kota.=$item->kota;
  $alamat.=$item->alamat;
  $email.=$item->email;
  $website.=$item->website;
  $deskripsi.=$item->deskripsi;
  $longitude.=$item->longitude;
  $latitude.=$item->latitude;
  $status.=$item->status;
}

$title = "Detail dan Lokasi : ".$titles; ?>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyAbXF62gVyhJOVkRiTHcVp_BkjPYDQfH5w"></script>

<script>

function initialize() {
  var myLatlng = new google.maps.LatLng(<?php echo $latitude ?>,<?php echo $longitude ?>);
  var mapOptions = {
    zoom: 10,
    center: myLatlng
  };

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading"><?php echo $titles ?></h1>'+
      '<div id="bodyContent">'+
      '<p><?php echo $alamat ?></p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon:'img/marker.png'
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
      <div class="row">
      <div class="col-md-5">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Lokasi - </strong></h4>
            </div>
            <div class="panel-body">
              <div id="map-canvas" style="width:100%;height:380px;"></div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - Detail - </strong></h4>
            </div>
            <div class="panel-body">
             <table class="table">
               <tr>
                 <th>Item</th>
                 <th>Detail</th>
               </tr>
               <tr>
                 <td>Nama Perusahaan</td>
                 <td><h4><?php echo $titles ?></h4></td>
               </tr>
               <tr>
                 <td>NPWP</td>
                 <td><h4><?php echo $npwp ?></h4></td>
               </tr>
               <tr>
                 <td>Deskripsi</td>
                 <td><h4><?php echo $deskripsi ?></h4></td>
               </tr>
               <tr>
                 <td>Provinsi</td>
                 <td><h4><?php echo $provinsi ?></h4></td>
               </tr> 
               <tr>
                 <td>Kota</td>
                 <td><h4><?php echo $kota ?></h4></td>
               </tr>
               <tr>
                 <td>Alamat</td>
                 <td><h4><?php echo $alamat ?></h4></td>
               </tr>
               <tr>
                 <td>Email</td>
                 <td><h4><?php echo $email ?></h4></td>
               </tr>
               <tr>
                 <td>Website</td>
                 <td><h4><a href=""><?php echo $website ?></a></h4></td>
               </tr>
               <tr>
                 <td>Status</td>
                 <td><h4><?php echo $status ?></h4></td>
               </tr>
             </table>
             <?php 
             	if ($_SESSION['level']=='1') { ?>
             		<a class="btn btn-primary" href="?page=module/hps&id=<?php echo $id; ?>">Upload Penawaran</a>
             <?php
             	}
             ?>
            </div>
            </div>
          </div>

        
        </div>
      </div>
    </div>
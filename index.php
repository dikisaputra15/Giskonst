<?php 
include "koneksi.php";
$page = isset($_GET['page']) ? $_GET['page'] : false;

$title = "Sistem Informasi Geografis Jasa Web";
include_once "header.php"; ?>
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            
            <div class="panel-body">
            <?php
              
              $filename = "$page.php";
              if(file_exists($filename)){
                include_once($filename);
              }else{
                include "depan.php";
              }
              
            ?>
              
            </div>
            </div>
          </div>

        
        </div>
      </div>
    </div>
    <?php include_once "footer.php"; ?>
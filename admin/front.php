<?php
$jml = mysqli_query($koneksi, "select * from tb_badan_usaha where status='menunggu verifikasi'");
$tjml = mysqli_num_rows($jml);

?>
 <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
			<?php 
              
				echo "<h3 style='color:white; position:absolute; margin-left:160px;'>$tjml</h3>";
              
			?>
            <p>Pengajuan GIS</p>
            <p>Perusahaan</p>
			  
            </div>
			<br>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="?page=module/proses/pengajuan" class="small-box-footer">Lihat Semua<i class="fa fa-arrow-circle-right"></i></a>
          </div>
</div>
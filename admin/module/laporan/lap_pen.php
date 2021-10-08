 
  <div class="box box-default">
  <h1>
       Pilih Berdasarkan Tanggal
      </h1>
  <div class="box-body">
          <div class="row">
            <div class="col-md-12">
			<form class="form" method="POST" action="module/laporan/ctk_pen.php" target="_blank">
				 <div class="col-md-3">
				<div class="form-group">
					<label>Tanggal</label>
					<input type="date" class="form-control" name="tgl1" required>
				</div>	
				</div>	
				<div class="col-md-3">
				<div class="form-group">
					<br>
					<label>Sampai dengan</label>
				</div>	
				</div>	
				<div class="col-md-3">
				<div class="form-group">
					<label>Tanggal</label>
					<input type="date" class="form-control" name="tgl2" required>
				</div>	
				</div>	
				<div class="col-md-3">
					<br>
					<input type="submit" class="btn btn-primary" name="lihat" value="Cetak" required>
				
				</div>
			</form>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
</div>
</div>

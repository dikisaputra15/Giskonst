<?php

include('../../../fpdf181/fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,8,'MUSICA STUDIO','0','1','C',false);
$pdf->Cell(0,8,'LAPORAN PENDAPATAN BERDASARKAN TANGGAL','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,2,'RangkasBitung','0','1','C',false);
$pdf->Ln(8);
$pdf->Cell(265,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,6,'No',1,0,'c');
$pdf->Cell(50,6,'Nama Pemesan',1,0,'c');
$pdf->Cell(30,6,'Tanggal',1,0,'c');
$pdf->Cell(30,6,'Nama Paket',1,0,'c');
$pdf->Cell(30,6,'subtotal',1,0,'c');
$pdf->Ln(2);

$no=0;
$tgl1=$_POST['tgl1'];
$tgl2=$_POST['tgl2'];
$sql = mysql_query("select tb_bayar .*, tb_detail_pesan_reg.id_pesan,tb_detail_pesan_reg.user_id,tb_detail_pesan_reg.tgl_main,
					tb_detail_pesan_reg.jam_main,tb_detail_pesan_reg.total, user.user_id,user.nama_lengkap,user.alamat,user.no_telp, tb_paket.nama_paket
					from tb_bayar join tb_detail_pesan_reg on tb_bayar.id_pesan=tb_detail_pesan_reg.id_pesan join user on tb_bayar.user_id=
					user.user_id join tb_paket on tb_bayar.id_paket=tb_paket.id_paket where tb_bayar.tgl_konfir between '$tgl1' and '$tgl2'") or die(mysql_error());
while($data = mysql_fetch_array($sql)){

	$total+=$data['total'];

	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(8,4,$no.".",1,0,'L');
	$pdf->Cell(50,4,$data['nama_lengkap'],1,0,'L');
	$pdf->Cell(30,4,$data['tgl_main'],1,0,'L');
	$pdf->Cell(30,4,$data['nama_paket'],1,0,'L');
	$pdf->Cell(30,4,$data['total'],1,0,'L');
	
}

$pdf->Ln(4);
$pdf->SetFont('Arial','',10);
$pdf->Cell(118,4,'Total',1,0,'c');
$pdf->Cell(30,4,"Rp.".$total,1,0,'c');
$pdf->Output();

?>
	
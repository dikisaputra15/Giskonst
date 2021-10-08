<?php

include('../../../fpdf181/fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,8,'MUSICA STUDIO','0','1','C',false);
$pdf->Cell(0,8,'LAPORAN HISTORI PEMESANAN','0','1','C',false);
$pdf->SetFont('Arial','i',8);
$pdf->Cell(0,2,'RangkasBitung','0','1','C',false);
$pdf->Ln(8);
$pdf->Cell(265,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,6,'No',1,0,'c');
$pdf->Cell(50,6,'Nama Pemesan',1,0,'c');
$pdf->Cell(30,6,'Tanggal',1,0,'c');
$pdf->Cell(30,6,'Jam Main',1,0,'c');
$pdf->Cell(30,6,'Jenis Paket',1,0,'c');
$pdf->Cell(30,6,'Harga',1,0,'c');
$pdf->Ln(2);

$no=0;
$tgl1=$_POST['tgl1'];
$tgl2=$_POST['tgl2'];
$sql = mysql_query("SELECT tb_detail_pesan_reg.*, tb_pesan_reg.nama_penerima,tb_pesan_reg.no_hp,tb_pesan_reg.alamat, 
tb_pesan_reg.status, tb_paket.nama_paket from tb_detail_pesan_reg join tb_pesan_reg on tb_detail_pesan_reg.id_pesan=tb_pesan_reg.id_pesan
join tb_paket on tb_detail_pesan_reg.id_paket=tb_paket.id_paket where tb_detail_pesan_reg.tgl_main between '$tgl1' and '$tgl2'") or die(mysql_error());
while($data = mysql_fetch_array($sql)){

	$total+=$data['sub_total'];

	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',10);
	$pdf->Cell(8,4,$no.".",1,0,'L');
	$pdf->Cell(50,4,$data['nama_penerima'],1,0,'L');
	$pdf->Cell(30,4,$data['tgl_main'],1,0,'L');
	$pdf->Cell(30,4,$data['jam_main'],1,0,'L');
	$pdf->Cell(30,4,$data['nama_paket'],1,0,'L');
	$pdf->Cell(30,4,$data['total'],1,0,'L');
	
}

$pdf->Ln(4);
$pdf->Output();

?>
	
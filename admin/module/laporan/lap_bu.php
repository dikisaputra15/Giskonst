<?php

include('../../../fpdf181/fpdf.php');
include('../../../koneksi.php');

$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,8,'LAPORAN BADAN USAHA TERDAFTAR','0','1','C',false);
$pdf->Ln(8);
$pdf->Cell(265,0.6,'','0','1','C',true);
$pdf->Ln(5);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(8,6,'No',1,0,'c');
$pdf->Cell(50,6,'Nama Perusahaan',1,0,'c');
$pdf->Cell(30,6,'NPWP',1,0,'c');
$pdf->Cell(50,6,'email',1,0,'c');
$pdf->Cell(30,6,'Provinsi',1,0,'c');
$pdf->Cell(30,6,'kota',1,0,'c');
$pdf->Ln(2);

$no=0;
$sql = mysqli_query($koneksi, "SELECT * from tb_badan_usaha where status='terverifikasi'");
while($data = mysqli_fetch_array($sql)){

	$no++;
	$pdf->Ln(4);
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(8,4,$no.".",1,0,'L');
	$pdf->Cell(50,4,$data['nama_perusahaan'],1,0,'L');
	$pdf->Cell(30,4,$data['npwp'],1,0,'L');
	$pdf->Cell(50,4,$data['email'],1,0,'L');
	$pdf->Cell(30,4,$data['provinsi'],1,0,'L');
	$pdf->Cell(30,4,$data['kota'],1,0,'L');
	
}

$pdf->Ln(4);
$pdf->Output();

?>
	
<?php

require('../phpfpdf/fpdf.php');

$pdf = new FPDF('l','mm','A5');

$pdf->AddPage();

$pdf->SetFont('Arial','B',16);

$pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN TEKNIK-COMPUTER',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR PENDAFTAR SMK TEKNIK-COMPUTER',0,1,'C');

$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'ID',1,0);
$pdf->Cell(85,6,'NAMA SISWA',1,0);
$pdf->Cell(50,6,'ALAMAT',1,0);
$pdf->Cell(30,6,'JENIS KELAMIN',1,1);

$pdf->SetFont('Arial','',10);

include 'config.php';
$query = mysqli_query($db, "select * from calon_siswa");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(20,6,$row['id'],1,0);
    $pdf->Cell(85,6,$row['nama'],1,0);
    $pdf->Cell(50,6,$row['alamat'],1,0);
    $pdf->Cell(30,6,$row['jenis_kelamin'],1,1); 
}

$pdf->Output();
?>
<?php
// memanggil library FPDF
require('fpdf184/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR KONTAK PEMBELI',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'id pembeli',1,0);
$pdf->Cell(30,6,'nama ',1,0);
$pdf->Cell(25,6,'usia',1,0);
$pdf->Cell(25,6,'domisili',1,0);
$pdf->Cell(60,6,'email',1,0);
$pdf->Cell(40,6,'sosial Media',1,1);
$pdf->SetFont('Arial','',10);
include 'koneksi.php';
$pembeli = mysqli_query($conn, "select * from pembeli");
while ($row = mysqli_fetch_array($pembeli)){
 $pdf->Cell(20,6,$row['id_pembeli'],1,0);
 $pdf->Cell(30,6,$row['nama'],1,0);
 $pdf->Cell(25,6,$row['usia'],1,0);
 $pdf->Cell(25,6,$row['domisili'],1,0);
 $pdf->Cell(60,6,$row['email'],1,0);
 $pdf->Cell(40,6,$row['sosialMedia'],1,1); 
}
$pdf->Output();
?>
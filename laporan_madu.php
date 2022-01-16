<?php
// memanggil library FPDF
require('fpdf184/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'PROGRAM STUDI TEKNIK INFORMATIKA',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'DAFTAR MAHASISWA MAKUL PEMROGRAMAN WEB DINAMIS',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'id_barang',1,0);
$pdf->Cell(15,6,'nama_barang',1,0);
$pdf->Cell(10,6,'Netto_barang',1,0);
$pdf->Cell(15,6,'harga_barang',1,0);

$pdf->SetFont('Arial','',10);
include 'koneksi.php';
$barang = mysqli_query($con, "select * from barang");
while ($row = mysqli_fetch_array($barang)){
 $pdf->Cell(10,6,$row['id_barang'],1,0);
 $pdf->Cell(50,6,$row['nama_barang'],1,0);
 $pdf->Cell(25,6,$row['Netto_barang'],1,0);
 $pdf->Cell(50,6,$row['harga_barang'],1,0);
}
$pdf->Output();
?>
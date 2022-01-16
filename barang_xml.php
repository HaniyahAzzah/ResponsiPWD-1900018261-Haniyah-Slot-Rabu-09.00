<?php
include "koneksi.php"; 
header('Content-Type: text/xml');
$query = "SELECT * FROM barang";
$hasil = mysqli_query($conn,$query);
$jumField = mysqli_num_fields($hasil);
echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysqli_fetch_array($hasil))
{
 echo "<Madu>";
 echo"<id_barang>",$data['id_barang'],"</id_barang>";
 echo"<nama_barang>",$data['nama_barang'],"</nama_barang>";
 echo"<Netto_barang>",$data['Netto_barang'],"</Netto_barang>";
 echo"<harga_barang>",$data['harga_barang'],"</harga_barang>";
 echo "</Madu>";
}
echo "</data>";
?>
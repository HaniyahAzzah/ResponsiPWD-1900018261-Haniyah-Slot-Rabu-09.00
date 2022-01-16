<?php
include "koneksi.php";
$sql="select * from barang order by id_barang";
$tampil = mysqli_query($conn,$sql);
if (mysqli_num_rows($tampil) > 0) {
$no=1;
$response = array();
 $response["data"] = array();
while ($r = mysqli_fetch_array($tampil)) {
 $h['id_barang'] = $r['id_barang'];
 $h['nama_barang'] = $r['nama_barang'];
 $h['Netto_barang'] = $r['Netto_barang'];
 $h['harga_barang'] = $r['harga_barang'];
 array_push($response["data"], $h);
 }
 echo json_encode($response);
}
else {
 $response["message"]="tidak ada data";
 echo json_encode($response);
 }
?>
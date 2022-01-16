<?php
$url = "https://haniyah-project.000webhostapp.com/getDataMadu.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach ($result as $r) {
 echo "<p>";
 echo "id_barang: " . $r->id_barang . "<br />";
 echo "nama_barang : " . $r->nama_barang . "<br />";
 echo "Netto_barang : " . $r->Netto_barang . "<br />";
 echo "harga_barang : " . $r->harga_barang . "<br />";
 echo "</p>";
}
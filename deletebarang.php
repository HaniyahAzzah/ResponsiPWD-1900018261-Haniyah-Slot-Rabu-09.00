<?php
include_once("koneksi.php");
$id_barang = $_GET['id_barang'];
$result = mysqli_query($conn, "DELETE FROM barang WHERE id_barang='$id_barang'");
header("Location:tampilbarang.php");
?>

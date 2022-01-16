<?php
session_start();
$id_barang=$_GET["id_barang"];
unset($_SESSION["keranjang"][$id_barang]);

echo "<script>alert('produk sudah dihapus dari keranjang');</script>";
echo "<script>location='keranjang_belanja.php';</script>";
?>
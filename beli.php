<?php
session_start();

$id_barang = $_GET['id_barang'];

if(isset($_SESSION["keranjang"][$id_barang])){
    $_SESSION["keranjang"][$id_barang]+=1;
}
else{
    $_SESSION["keranjang"][$id_barang]=1;
}

echo "<script>alert('produk telah masuk ke keranjang');</script>";
echo "<script>location='keranjang_belanja.php';</script>";

?>
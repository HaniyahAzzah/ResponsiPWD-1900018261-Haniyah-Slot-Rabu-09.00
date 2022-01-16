<?php
include_once("koneksi.php");
$id_pembeli = $_GET['id_pembeli'];
$result = mysqli_query($conn, "DELETE FROM pembeli WHERE id_pembeli='$id_pembeli'");
header("Location:admin.php");
?>


<?php 
include 'koneksi.php';
?>

<h3>Halaman Pencarian Data Madu</h3>
<!DOCTYPE html>
<html>
<head>
    
    
    <style type="text/css">

        h1 {
            margin-top: 130px;
        }

        .tabel1 {
            font-family: sans-serif;
            color: #444;
            border-collapse: collapse;
            width: 60%;
            border: 2px solid grey;
            margin-top: 50px;
        }

        .tabel1 tr th {
            background: orange;
            color: #fff;
            font-weight: normal;
        }

        .tabel1, th, td {
            padding: 8px 20px;
            text-align: center;
        }

        .tabel1 tr:nth-child(even) {
            background: yellow;
        }


    </style>
    </head>
<form action="" method="get">
<label>Cari :</label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
<table border="1">
<tr>
<th>No</th>
<th>Nama Barang</th>
<th>Netto Barang</th>
<th>Harga Barang</th>
</tr>
<?php 
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql="select * from barang where nama_barang like'%".$cari."%'";
$tampil = mysqli_query($conn,$sql);
}else{
$sql="select * from barang";
$tampil = mysqli_query($conn,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($tampil)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['nama_barang']; ?></td>
<td><?php echo $r['Netto_barang']; ?></td>
<td><?php echo $r['harga_barang']; ?></td>
</tr>
<?php } ?>
</table>
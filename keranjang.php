<?php 
session_start();

$conn = new mysqli("localhost", "root", "" , "pwd_proyek1");

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Halaman Keranjang</title>
  </head>
  <body>


<section class="konten">
    <div class="container">
        <br>
        <h1>Keranjang belanja</h1>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Netto</th>
                    <th>Harga</th>
                    <th>Jumlah </th>
                    <th>Total Harga</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?>
              <?php foreach ($_SESSION['keranjang'] as $id_barang => $jumlah): ?>
                    <?php 
                    $ambil=$conn->query("SELECT * FROM barang WHERE id_barang='$id_barang'");
                    $subharga = $ambil['harga_barang']*$jumlah;
                    ?>
               <tr>
                    <td> <?php echo $no;?> </td>
                    <td><?php echo $ambil['nama_barang'];?> </td>
                    <td><?php echo $ambil['Netto_barang'];?> </td>
                    <td>Rp <?php echo number_format($ambil['harga_barang'])?></td>
                    <td><?php echo $jumlah ?></td>
                    <td>Rp <?php echo number_format($subharga); ?></td>
                    <td><a class="btn btn-danger" href="hapus.php?id=<?php echo $id_barang?>">Hapus</a></td>
                </tr>
        <?php $no++;?>
        <?php endforeach ?>
            </tbody>
                </table>
                <a href="index.php" class="btn btn-primary"> Tambah Barang </a>
              </div>
</section>




</body>
</html>
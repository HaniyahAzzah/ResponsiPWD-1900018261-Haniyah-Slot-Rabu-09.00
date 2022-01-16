<?php session_start();
 $conn = new mysqli("localhost","root","","pwd_proyek1");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Keranjang Belanja</title>
    <link href="style.css"rel="stylesheet">
        
           
  </head>
  <body>
    <table class="table table-bordered">
        <thead>
        <tr>
            <td>No</td>
            <td>Produk</td>
            <td>Neto</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>Total Harga</td>
        </tr>
</thead>

       <tbody>
           <?php $no=1;?>
            <?php foreach ($_SESSION['beli'] as $id_barang => $jumlah): ?>
                    <?php 
                    $ambil=$conn->query("SELECT * FROM barang WHERE id_barang='$id_barang'");
                    $pecah = $ambil-> fetch_assoc();
                    $total = $pecah['harga_barang']*$jumlah;
                        
                    ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $pecah['nama_barang'];?></td>
            <td><?php echo $pecah['Netto_barang'];?></td>
            <td><?php echo $pecah['harga_barang'];?></td>
            <td><?php echo $jumlah?></td>
            <td> <?php echo $total?></td>
        </tr>
        <?php $no++;?>
        <?php endforeach ?>
</tbody>
</table>
<a href="index.php" class="btn btn-primary"> Tambah Barang </a>
</body>
</html>
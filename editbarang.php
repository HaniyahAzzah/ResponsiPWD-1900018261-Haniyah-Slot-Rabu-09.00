<?php

include_once("koneksi.php");

if(isset($_POST['update'])){ 
    $id_barang = $_POST['id_barang']; 
    $nama=$_POST['nama_barang']; 
    $netto=$_POST['Netto_barang']; 
    $harga=$_POST['harga_barang']; 
    $email=$_POST['email']; 
   
   
    $result = mysqli_query($conn, "UPDATE barang SET nama_barang='$nama', Netto_barang='$netto',harga_barang='$harga' WHERE id_barang='$id_barang'");
    
    header("Location: tampilbarang.php");
    }
?>

<?php

$id_barang = $_GET['id_barang'];

$result = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");

    while($user_data = mysqli_fetch_array($result)){
        $id = $user_data['id_barang'];
        $nama = $user_data['nama_barang'];
        $netto = $user_data['Netto_barang'];
        $harga = $user_data['harga_barang'];
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Edit Data_pembeli</title>
  </head>

  <body>
      <div class="container">
      <h1>Update Data Barang</h1>
      <a href="tampilbarang.php" class="btn btn-info btn-sm m-2"> Data </a>

      <div class="row">
          <div class="col-sm-6 offset-sm-3">
        <form  method="post" action="editbarang.php">
           
            <div class="form-group">
                <label>Id Barang</label>
                <input type="text" name="id_barang" value="<?= $id_barang?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" value="<?= $nama?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Netto Barang</label>
                <input type="text" name="Netto_barang" value="<?= $netto?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Harga Barang</label>
                <input type="text" name="harga_barang" value="<?= $harga?>" class="form-control" required>
            </div>
            <button type="submit" name="update" class="btn btn-success btn-sm mt-2"> update </button>
        </form>
        </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

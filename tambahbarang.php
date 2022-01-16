<?php
//untuk koneksi database dengan mengkonfigurasi file koneksi.php
//file koneksi sudah ada pada file index.php, karena sudah di panggil
include_once("koneksi.php");

//fungsi untuk Ambil semua data pengguna dari database
$result = mysqli_query($conn, "SELECT * FROM barang ");

// harus di tutup karena di bawahnya ada html
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tampilan</title>
  </head>

  <body>
      <div class="container">
      <h1>Tambah Data Barang</h1>
      <a href="tampilbarang.php" class="btn btn-info btn-sm m-2"> Data </a>

      <div class="row">
          <div class="col-sm-6 offset-sm-3">
        <form action="" method="post">
            <div class="form-group">
                <label>ID BARANG</label>
                <input type="text" name="id_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Netto Barang</label>
                <input type="text" name="Netto_barang" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Harga Barang</label>
                <input type="text" name="harga_barang" class="form-control" required>
            </div>
            <!-- <div class="form-group">
                <label>Tanggal_Lahir</label>
                <input type="date" name="Tgl_Lahir" class="form-control" required>
            </div> -->
            <button type="submit" name="Submit" class="btn btn-success btn-sm mt-2"> Tambah </button>
        </form>
        </div>
        </div>
      </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    //melakukan mengecek data pada formulir yang dikirimkan, dan akan memasukkan data formulir ke dalam tabel pengguna.
    //Pemakaian method POST ini digunakan untuk mengirimkan data yang penting / kredensial dan data yang orang lain tidak boleh tau
    if(isset($_POST['Submit'])) { //ketika di submit maka data akan di proses
    $id_barang = $_POST['id_barang']; //variabel $nim menangkap data POST "Nim" yang dikirim dengan atribut Nim, dan ditampung di variabel $nim
    $nama_barang = $_POST['nama_barang']; //variabel $nama menangkap data POST "Nama" yang dikirim dengan atribut Nama, dan ditampung di variabel $nama
    $Netto_barang = $_POST['Netto_barang']; //variabel $jkel menangkap data POST "jenis kelamin" yang dikirim dengan atribut Jenis_Kelamin, dan ditampung di variabel $jkel
    $harga_barang = $_POST['harga_barang']; //variabel $alamat menangkap data POST "Alamat" yang dikirim dengan atribut Alamat, dan ditampung di variabel $alamat
    //variabel $tgllhr menangkap data POST "tanggal lahir" yang dikirim dengan atribut Tgl_Lahir, dan ditampung di variabel $tgllhr

    // memanggil file koneksi.php untuk menghubungkan dengan database
    include_once("koneksi.php");

    //Masukkan data pengguna ke dalam tabel mahasiswa
    $result = mysqli_query($conn, "INSERT INTO barang(id_barang,nama_barang,Netto_barang,harga_barang) 
            VALUES('$id_barang','$nama_barang', '$Netto_barang','$harga_barang')"); //variable variabel yang telah di isi data,                                                                                                 //yang telah dilempar dari atribut POST

    // menampilkan pesan saat pengguna berhasil menambahkan data, dan datanya telah di tambahkan di database
    echo "Data berhasil disimpan. <a href='tampilbarang.php'>View Users</a>";
    }
?>
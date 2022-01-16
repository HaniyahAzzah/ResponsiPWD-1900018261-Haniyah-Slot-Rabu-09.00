<?php
//untuk koneksi database dengan mengkonfigurasi file koneksi.php
//file koneksi sudah ada pada file index.php, karena sudah di panggil
include_once("koneksi.php");

//fungsi untuk Ambil semua data pengguna dari database
$result = mysqli_query($conn, "SELECT * FROM pembeli ");

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
      <h1>Tambah Data Pembeli</h1>
      <a href="admin.php" class="btn btn-info btn-sm m-2"> Data </a>

      <div class="row">
          <div class="col-sm-6 offset-sm-3">
        <form action="" method="post">
            <div class="form-group">
                <label>ID-Pembeli</label>
                <input type="number" name="id_pembeli" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Usia</label>
                <input type="text" name="usia" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Domisili</label>
                <input type="text" name="domisili" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Sosial Media</label>
                <input type="text" name="sosialMedia" class="form-control" required>
            </div>
            <div class="form-group">
                <label>No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" required>
            </div>
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
    $id_pembeli = $_POST['id_pembeli']; //variabel $nim menangkap data POST "Nim" yang dikirim dengan atribut Nim, dan ditampung di variabel $nim
    $nama = $_POST['nama']; //variabel $nama menangkap data POST "Nama" yang dikirim dengan atribut Nama, dan ditampung di variabel $nama
    $usia = $_POST['usia']; //variabel $jkel menangkap data POST "jenis kelamin" yang dikirim dengan atribut Jenis_Kelamin, dan ditampung di variabel $jkel
    $domisili = $_POST['domisili']; //variabel $alamat menangkap data POST "Alamat" yang dikirim dengan atribut Alamat, dan ditampung di variabel $alamat
    $email = $_POST['email'];
    $sosialMedia = $_POST['sosialMedia'];
    $no_telepon = $_POST['no_telepon'];//variabel $tgllhr menangkap data POST "tanggal lahir" yang dikirim dengan atribut Tgl_Lahir, dan ditampung di variabel $tgllhr

    // memanggil file koneksi.php untuk menghubungkan dengan database
    include_once("koneksi.php");

    //Masukkan data pengguna ke dalam tabel mahasiswa
    $result = mysqli_query($conn, "INSERT INTO pembeli(id_pembeli,nama,usia,domisili,email,sosialMedia,no_telepon) 
            VALUES('$id_pembeli','$nama', '$usia','$domisili','$email','$sosialMedia','$no_telepon')"); //variable variabel yang telah di isi data,                                                                                                 //yang telah dilempar dari atribut POST

    // menampilkan pesan saat pengguna berhasil menambahkan data, dan datanya telah di tambahkan di database
    echo "Data berhasil disimpan. <a href='admin.php'>View Users</a>";
    }
?>
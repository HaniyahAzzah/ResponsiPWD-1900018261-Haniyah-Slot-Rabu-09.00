<?php
        include 'koneksi.php';

       session_start();
       if(isset($_SESSION['username'])){
        $sqlquery = "SELECT * FROM pembeli";
        if ($result = mysqli_query($conn, $sqlquery)) {
        ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pembeli</title>
    
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
<body>
    <center>
        <h1>Data Kontak Pembeli</h1>
        <body>
<a href="tambah.php">Tambah Data Baru</a><br/><br/>
<a href ="tampilbarang.php">Data Barang</a><br/><br/>
        <a href="logout.php">Logout</a><br>
        <form action="" method="get">
                            <input type="text" placeholder="Search" name="cari" > 
                            <input type="submit" value="Cari">
                        </form>
        <?php
    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>"; //Menampilkan hasil pencarian data
    }
    
?>

        <table class="tabel1">
         <tr>
            <th scope="col">ID Pembeli</th>
            <th scope="col">Nama</th>
            <th scope="col">Usia</th>
            <th scope="col">Domisili</th>
            <th scope="col">Email</th>
            <th scope="col">Sosial Media</th>
        </tr>
        <?php if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="select * from pembeli where domisili like'%".$cari."%'"; // digunakan untuk memfilter data yang akan di cari
    $tampil = mysqli_query($conn,$sql); //menjalankan query dari variable con yang diambil dari file koneksi.php
    }else{ 
    $sql="select * from pembeli"; // untuk mengambil dari semua data pada table mahasiswa
    $tampil = mysqli_query($conn,$sql);
    }
   
?>
        <?php
            while ($row = mysqli_fetch_array($tampil)) {
                $no=1;
                ?>
                <tr>
                    <td scope="row"><?php echo $row['id_pembeli'] ?></td>
                    <td scope="row"><?php echo $row['nama'] ?></td>
                    <td scope="row"><?php echo $row['usia'] ?></td>
                    <td scope="row"><?php echo $row['domisili'] ?></td>
                    <td scope="row"><?php echo $row['email'] ?></td>
                    <td scope="row"><?php echo $row['sosialMedia'] ?></td>
                    <!-- <td scope="row">
                    <td><a href='edit.php?id_pembeli=$user_data[id_pembeli]' class='btn btn-warning btn-sm'>Edit</a>  -->
                    <!-- <a href='delete.php?id_pembeli=$user_data[id_pembeli]' class='btn btn-danger btn-sm'>Delete</a>                         </td> -->
                    </td>
                </tr>
                <?php
            }
            mysqli_free_result($result);
        }
        mysqli_close($conn);
        ?>
    </table>
    <a href="laporan_admin.php">Cetak Data Pembeli</a><br/><br/>  
</center>
</body>
<?php
       }else{
           header("Location: form_login.php");
           exit();
       }
       ?>
       </html>
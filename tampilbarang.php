<?php
include_once("koneksi.php");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
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

      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>
    <a href="tambahbarang.php" class="btn btn-info btn-sm m-2"> Tambah Data </a><br>
    <a href="barang_json.php" class="btn btn-info btn-sm m-2"> Data JSON </a><br>
    <a href="barang_xml.php" class="btn btn-info btn-sm m-2"> Data XML </a><br>
          <form action="" method="get">
        <input type="text" placeholder="Search" name="cari" > 
        <input type="submit" value="Cari">
        </form>
                        
 <?php
    if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>"; 
    }
?>
            <br><br>
            <table width='80%' border=1 class="table table-bordered ">
            <table class="tabel1">
            <tr>
                <th>Id barang</th> 
                <th>Nama barang</th> 
                <th>Netto barang</th> 
                <th>Harga Barang</th>
                <th>Aksi</th>
            </tr>
<?php if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="select * from barang where nama_barang like'%".$cari."%'";
    $tampil = mysqli_query($conn,$sql);
    }else{ 
    $sql="select * from barang";
    $tampil = mysqli_query($conn,$sql);
    }
   
?>
            <?php
         
                    while($user_data = mysqli_fetch_array($tampil)) {  
                        echo "<tr>";
                        echo "<td>".$user_data['id_barang']."</td>"; 
                        echo "<td>".$user_data['nama_barang']."</td>";
                        echo "<td>".$user_data['Netto_barang']."</td>"; 
                        echo "<td>".$user_data['harga_barang']."</td>"; 
                        echo "<td><a href='editbarang.php?id_barang=$user_data[id_barang]' class='btn btn-warning btn-sm'>Edit</a> 
                            <a href='deletebarang.php?id_barang=$user_data[id_barang]' class='btn btn-danger btn-sm'>Delete</a>                         </td>
                             </tr>";
                        }
                 ?>
                
                    </table>           
           
</body>

</html>

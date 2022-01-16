<?php
include_once("koneksi.php");

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>
<body>
    <a href="tambah.php" class="btn btn-info btn-sm m-2"> Tambah Data </a><br>

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
            <tr>
                <th>Id pembeli</th> 
                <th>Nama Prduk</th> 
                <th>Harga</th> 
                <th>Berta Produk</th>
                <th>Stok Produk</th>
                <th>Update</th>
                <th>Update</th>
                <th>Update</th>
                <th>Update</th>
            </tr>
<?php if(isset($_GET['cari'])){
    $cari = $_GET['cari'];
    $sql="select * from pembeli where nama_produk like'%".$cari."%'";
    $tampil = mysqli_query($conn,$sql);
    }else{ 
    $sql="select * from pembeli";
    $tampil = mysqli_query($conn,$sql);
    }
   
?>
            <?php
         
                    while($user_data = mysqli_fetch_array($tampil)) {  
                        echo "<tr>";
                        echo "<td>".$user_data['id_pembeli']."</td>"; 
                        echo "<td>".$user_data['nama']."</td>";
                        echo "<td>".$user_data['usia']."</td>"; 
                        echo "<td>".$user_data['usia']."</td>"; 
                        echo "<td>".$user_data['domisili']."</td>"; 
                        echo "<td>".$user_data['email']."</td>"; 
                        echo "<td>".$user_data['sosialMedia']."</td>"; 
                        echo "<td>".$user_data['no_telepon']."</td>"; 
                        echo "<td><a href='edit.php?id_pembeli=$user_data[id_pembeli]' class='btn btn-warning btn-sm'>Edit</a> 
                            <a href='delete.php?id_pembeli=$user_data[id_pembeli]' class='btn btn-danger btn-sm'>Delete</a>                         </td>
                             </tr>";
                        }
                 ?>
                
                    </table>           
           
</body>

</html>

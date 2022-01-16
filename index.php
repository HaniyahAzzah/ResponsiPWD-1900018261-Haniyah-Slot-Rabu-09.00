
<!--
<?php 
session_start();
$koneksi = new mysqli("localhost", "root","","pwdproyek1");
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kareema Honey</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo">
        <img src="images/kareema.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#products">products</a>
        <a href="#contact">contact</a>
        <a href="form_login.php">Login Admin</a>
       
    </nav>

    
    <div class="search-form">
    <a href="cari_madu.php"class="fas fa-search">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    

    </div>

    

</header>

<!-- Header -->

<!-- Menu Home   -->

<section class="home" id="home">

    <div class="content">
        <h3>Madu murni memelihara kesehatan</h3>
        
        
    </div>

</section>

<!-- Menu Home akhir -->

<!-- Menu About Us  -->

<section class="about" id="about">

    <h1 class="heading"> <span>Tentang </span> Kami </h1>

    <div class="row">

        <div class="image">
            <img src="images/about.png" alt="">
        </div>

        <div class="content">
            <h3>Apa yang membuat madu kami spesial?</h3>
            <p>Dipanen dari lebah pilihan dan juga bahan alam asli yang dijamin asli kualitasnya.</p>
            <p>Tersedia kemasan kaca yang mempercantik penampilan, selain itu lebih sehat ditinjau dari kesehatan.</p>
            
        </div>

    </div>

</section>

<!-- About akhir -->


<section class="products" id="products">

    <h1 class="heading"> Produk <span>Kami</span> </h1>

    <div class="box-container">
       

       <?php
       $conn = new mysqli("localhost","root","","pwd_proyek1");
       ?>

        
<!--Produk Pertama(NTT)-->
        <div class="box">
        
            <div class="icons">
            <a href="https://bit.ly/3raNdgN" class="fas fa-shopping-cart"></a>
            
            </div>
            
            <div class="image">
                <img src="images/ntt.png" alt="">
            </div>
            <div class="content">
                <h3>Madu Kaliandra</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp.103.000,00</div>
            </div>
          
        </div>
<!--Produk Kedua (Kelengkeng)-->
        <div class="box">
            <div class="icons">
            <a href="https://bit.ly/3trJ7Uj" class="fas fa-shopping-cart"></a>
            </div>
            <div class="image">
                <img src="images/produkkelengkeng.png" alt="">
            </div>
            <div class="content">
                <h3>Kelengkeng 450gr</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                   
                </div>
                <div class="price">Rp.90.000</div>
            </div>
        </div>
<!--Produk Ketiga(Randu Super)-->
        <div class="box">
            <div class="icons">
                <a href="https://bit.ly/3ns3KvU" class="fas fa-shopping-cart"></a>
            </div>
            <div class="image">
                <img src="images/randusuper.png" alt="">
            </div>
            <div class="content">
                <h3>Randu Super 300gr</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp.50.000</div>
            </div>
        </div>
        <!--Produk Keempat(Kaliandra)-->
        <div class="box">
            <div class="icons">
                <a href="#" class="fas fa-shopping-cart"></a>
            </div>
            <div class="image">
                <img src="images/kaliandra.png" alt="">
            </div>
            <div class="content">
                <h3>Kaliandra 300gr</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <div class="price">Rp.60.000</span></div>
            </div>
        </div>
         <!--Produk Kelima(Randu Biasa)-->
         <div class="box">
            <div class="icons">
                <a href="" class="fas fa-shopping-cart"></a>
               
            </div>
            <div class="image">
                <img src="images/randu.png" alt="">
            </div>
            <div class="content">
                <h3>Randu Biasa 500gr</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div class="price">Rp.60.000</span></div>
            </div>
        </div>

    </div>

</section>



<!-- Bagian Kontak  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.836726836555!2d110.42634531402494!3d-7.807102979670498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a51dbf7f8c9bb%3A0x2bc3f8587ef6fe04!2sKareema%20honey!5e0!3m2!1sen!2sid!4v1636688532366!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <form action="" method="POST">
            <?php
            include "./koneksi.php";

            $namaErr = $usiaErr = $domisiliErr = $emailErr = $sosial_mediaErr = $no_teleponErr = "";
            $nama = $email = $usia = $domisili = $sosial_media = $no_telepon = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               if (empty($_POST["nama"])) {
                   $namaErr = "Nama harus diisi";
               }else {
                   $nama = test_input($_POST["nama"]);
               }

               if (empty($_POST["usia"])) {
                   $usiaErr = "Usia harus diisi";
               }else {
                   $usia = test_input($_POST["usia"]);
               }

               if (empty($_POST["email"])) {
                   $emailErr = "Email harus diisi";
               }else {
                   $email = test_input($_POST["email"]);

 // Mengecek bagian email
                   if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                       $emailErr = "Email tidak sesuai format"; 
                   }
               }


               if (empty($_POST["domisili"])) {
                $domisiliErr = "Domisili harus diisi";
            }else {
                $domisili = test_input($_POST["domisili"]);
            }

            if (empty($_POST["sosial_media"])) {
                $sosial_mediaErr = "Sosial media harus diisi";
            }else {
                $sosial_media = test_input($_POST["sosial_media"]);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["no_telepon"])) {
                    $no_teleponErr = "No Telepon harus diisi";
                }else {
                    $no_telepon = test_input($_POST["no_telepon"]);
                }
            }

            if ($namaErr!="" OR $usiaErr!="" OR $domisiliErr!="" OR $emailErr!="" OR $sosial_mediaErr!="" OR $no_teleponErr!=""){
                $message = "Registration failed! Errors found";
            }
            else{
                $query_insert= "INSERT INTO pembeli
                (nama,usia,domisili,email,sosialMedia,no_telepon)VALUES (
                '$nama', '$usia', '$domisili', '$email', '$sosial_media', '$no_telepon')";


                $query_insert_ok =mysqli_query($con,$query_insert);
                // $message = "Registration Successful!";
                echo "<script language='javascript'>alert('Data Anda Sudah Masuk!');</script>"; 
            }
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>


    <h3>Mari Lebih dekat dengan kami</h3>
    <div class="inputBox">
        <input type="text" name="nama" placeholder="Nama">
    </div>
    <h1 style="color: white;"><?php echo $namaErr; ?></h1>
    <div class="inputBox">

        <input type="text" name="usia" placeholder="Usia">
    </div>
    <h1 style="color: white;"><?php echo $usiaErr; ?></h1>
    <div class="inputBox">

        <input type="text" name="domisili" placeholder="Domisili">
    </div>
    <h1 style="color: white;"><?php echo $domisiliErr; ?></h1>
    <div class="inputBox">

        <input type="email" name="email" placeholder="Email">
    </div>
    <h1 style="color: white;"><?php echo $emailErr; ?></h1>
    <div class="inputBox">

        <input type="text" name="sosial_media" placeholder="Sosial Media">
    </div>
    <h1 style="color: white;"><?php echo $sosial_mediaErr; ?></h1>
    <div class="inputBox">

        <input type="nomor" name="no_telepon" placeholder="No. Telepon">
    </div>
    <h1 style="color: white;"><?php echo $no_teleponErr; ?></h1>
    <input type="submit" value="Submit" class="btn">
</form>
</div>

</section>

<!-- contact section ends -->







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
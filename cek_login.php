<?php
session_start();
include "koneksi.php";
$username = $_POST['username'];
$pass    =($_POST['password']);
$sql="SELECT * FROM admin WHERE username = '$username' AND password='$pass'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {
 
$login=mysqli_query($conn,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);
if ($ketemu > 0){
 $_SESSION['username'] = $r['username'];
 $_SESSION['password'] = $r['password'];
echo"USER BERHASIL LOGIN<br>";
header('location:admin.php'); //jika login berhasil, maka ganti/letakkan halaman utamamu disini
echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}
else{
 echo "<center>Login gagal! username & password tidak benar<br>";
 echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>";
}
mysqli_close($conn); 
} 
else {
echo "<center>Login gagal! Captcha tidak sesuai<br>";
 echo "<a href=form_login.php><b>ULANGI LAGI</b></a></center>"; }
?>
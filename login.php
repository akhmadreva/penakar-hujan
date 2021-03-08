<?php
include 'koneksi.php';
 
$nip = $_POST['nip'];
$password = md5($_POST['password']);
 
$login = mysql_query("select * from user where nip='$nip' and password='$password'");
$cek = mysql_num_rows($login);
 
if($cek > 0){
 session_start();
 $_SESSION['nip'] = $nip;
 $_SESSION['status'] = "login";
 header("location:index.php");
}else{
 header("location:landing-page.php"); 
}
 
?>
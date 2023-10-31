<?php 
$koneksi = mysqli_connect
(
    "localhost",
    "root",
    "",
    "tugasakhir_pweb"
);
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi,"SELECT*FROM admin where username='$username' AND password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../index2.html");
}else{
	header("location:../login2.html");	
}
 
?>
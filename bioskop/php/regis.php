<?php
$koneksi = mysqli_connect
(
    "localhost",
    "root",
    "",
    "tugasakhir_pweb"
);
if(isset($_POST["Daftar"]))
{
    $nama = $koneksi -> real_escape_string($_POST["Nama"]);
    $alamat = $koneksi -> real_escape_string($_POST["Alamat"]);
    $tlp = $koneksi -> real_escape_string($_POST["Notlp"]);
    $jekel = $koneksi -> real_escape_string($_POST["Jk"]);
    $username = $koneksi -> real_escape_string($_POST["username"]);
    $password= $koneksi -> real_escape_string($_POST["password"]);


    $SQL = $koneksi -> prepare (" INSERT INTO  user (Nama,Alamat,notlp,Jk,username,password) VALUES (?,?,?,?,?,?)");
    $SQL -> bind_param("ssssss",$nama,$alamat,$tlp,$jekel,$username,$password);
    $SQL -> execute();

    if(!$SQL){
        echo $mysqliconn -> error;
    }
    else{
        echo('Pembuatan akun berhasil');
        header("location: ../login.html");
    }
    
}
?>
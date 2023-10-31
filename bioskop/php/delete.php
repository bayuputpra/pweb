<?php
    $koneksi=mysqli_connect("localhost","root","","tugasakhir_pweb");
    $id=$_GET['Id_pesan'];
    $result=mysqli_query($koneksi,"DELETE FROM pemesan WHERE Id_pesan='$id'");
    header("Location:lihatpesan2.php");
?>
<?php
$koneksi=mysqli_connect("localhost","root","","tugasakhir_pweb");
if(isset($_POST['update']))
{
    $id_dari_form=$_POST['id'];
    $judul_dari_form=$_POST['judul'];
    $durasi_dari_form=$_POST['durasi'];
    $harga_dari_form=$_POST['harga'];
    $theater_dari_form=$_POST['theater'];
    $jam_dari_form=$_POST['jam'];

    $result=mysqli_query($koneksi,"UPDATE film SET Judul='$judul_dari_form', Durasi='$durasi_dari_form',
    Harga='$harga_dari_form', Theater='$theater_dari_form', Jam_tayang='$jam_dari_form'
    WHERE Id_film='$id_dari_form'");
    header("Location:lihatfilm.php");
}
?>
<!DOCTYPE html>
<head>
<title>Database</title>
</head>
<body>
<?php
    $koneksi = mysqli_connect
                (
                    "localhost",
                    "root",
                    "",
                    "tugasakhir_pweb"
                );
    if(isset($_POST["simpan"]))
    {
        $id = $koneksi -> real_escape_string($_POST["IDPESAN"]);
        $kode = $koneksi -> real_escape_string($_POST["IDFILM"]);
        $nama = $koneksi -> real_escape_string($_POST["NAMA"]);
        $tiket = $koneksi -> real_escape_string($_POST["JUMLAHTIKET"]);
        $kursi = $koneksi -> real_escape_string($_POST["NOKURSI"]);
        $tgl = $koneksi -> real_escape_string($_POST["TANGGAL"]);

        $SQL = $koneksi -> prepare("INSERT INTO pemesan(Id_pesan,Kode_film,Nama,Jumlah_tiket,No_kursi,Tanggal) VALUES(?,?,?,?,?,?)");
        $SQL -> bind_param("sssiss",$id,$kode,$nama,$tiket,$kursi,$tgl);
        $SQL -> execute();

        if(!$SQL){
            echo $mysqliconn -> error;
        }
        else{
            echo "Sukses tambah data";
            header("location: pesan.php");
        }
    }
?>
</body>
</html>
<?php
$koneksi=mysqli_connect("localhost","root","","tugasakhir_pweb");
$id=$_GET['Id_film'];
$result=mysqli_query($koneksi,"SELECT *FROM film WHERE Id_film='$id'");
while($row=mysqli_fetch_array($result))
{
    $id= $row['Id_film'];
    $judul= $row['Judul'];
    $durasi= $row['Durasi'];
    $harga= $row['Harga'];
    $theater= $row['Theater'];
    $jam= $row['Jam_tayang'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>CINEBAY XX1</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	<![endif]-->
	<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="js/jquery-func.js"></script>
</head>
<body>
<!-- Shell -->
<div id="shell">
	<!-- Header -->
	<div id="header">
		<img src="../images/cinema.png"width="80px"height="80px">
		<h1>CINEBAY XX1</h1>
		<!-- Navigation -->
		<div id="navigation">
			<ul>
			    <li><a class="active" href="../index.html">HOME</a></li>
			    <li><a href="../in_theeaters.html">IN THEATERS</a></li>
				<li><a href="../coming_soon.html">COMING SOON</a></li>
				<li class="dropdown"><a href="#">MENU</a>
					<ul class="isi-dropdown">
                    	<li><a href="lihatfilm.php">EDIT FILM</a></li>
						<li><a href="lihatpesan2.php">LIHAT TRANSAKSI</a></li>
					</ul>
				</li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</div>
		<!-- end Navigation -->
	</div>
	<!-- end Header -->
	
	<!-- Main -->
	<div id="main">
		<!-- Content -->
		<div id="content">

			<!-- Box -->
			<div class="box">
				<div class="head"></div>
			</div>
            <!-- end Box -->
            
            <h1 class="text-h3">EDIT DATA FILM</h1>
            <form action="prosesedit.php" method="POST">
            <table class="table3" align="center">
                <tr>
                    <td>ID FILM</td>
                    <td><input type="text" name="id" value="<?php echo $id;?>"readonly></td>
                </tr>
                <tr>
                    <td>JUDUL</td>
                    <td><input type="text" name="judul" value="<?php echo $judul;?>"></td>
                </tr>
                <tr>
                    <td>DURASI</td>
                    <td><input type="text" name="durasi" value="<?php echo $durasi;?>"></td>
                </tr>
                <tr>
                    <td>HARGA</td>
                    <td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
                </tr>
                <tr>
                    <td>THEATER</td>
                    <td><input type="text" name="theater" value="<?php echo $theater;?>"></td>
                </tr>
                <tr>
                    <td>JAM TAYANG</td>
                    <td><input type="text" name="jam" value="<?php echo $jam;?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $_GET['Id_film'];?>"></td>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
            </form>

            <!-- Enter 5 -->
			<div class="enter5">
				<div class="head"></div>
			</div>
            <!-- end Enter 5-->
			
		</div>
		<!-- end Content -->

	<!-- Footer -->
	<div id="footer">
		<p>
			<a href="../index.html">HOME</a> <span>|</span>
			<a href="../in_theeaters.html">IN THEATERS</a> <span>|</span>
			<a href="../coming_soon.html">COMING SOON </a> <span>|</span>
		</p>
		<p> &copy; 2020 CINEBAY XX1, LLC. All Rights Reserved.</a></p>
	</div>
	<!-- end Footer -->
</div>
<!-- end Shell -->
</body>
</html>
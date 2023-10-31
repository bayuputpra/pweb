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
						<li><a href="pesan.php">PESAN TIKET</a></li>
						<li><a href="lihatpesan.php">LIHAT PESANAN</a></li>
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

            <h1 class="text-h1">PESAN TIKET BIOSKOP</h1>
            <table class="table" border="5">
                <tr>
                    <th>ID FILM</th>
                    <th>JUDUL</th>
                    <th>DURASI</th>
                    <th>HARGA</th>
                    <th>THEATER</th>
                    <th>JAM TAYANG</th>
                </tr>
                <?php
                    $koneksi = mysqli_connect("localhost","root","","tugasakhir_pweb");
                    $no = 1;
                    $data = mysqli_query($koneksi,"SELECT*from film");
                    while($row=mysqli_fetch_array($data))
                    {
                        ?>
                        <tr>
                            <td><?php echo $row["Id_film"];?></td>
                            <td><?php echo $row["Judul"];?></td>
                            <td><?php echo $row["Durasi"];?></td>
                            <td><?php echo $row["Harga"];?></td>
                            <td><?php echo $row["Theater"];?></td>
                            <td><?php echo $row["Jam_tayang"];?></td>
                        </tr>
                        <?php
                    }
                ?>
			</table>

			<!-- Enter 3 -->
			<div class="enter3">
				<div class="head"></div>
			</div>
			<!-- end Enter 3-->

			<form action="prosespesan.php"method="POST">
			<table class="table2" align="center">
				<tr>
					<td>ID PESAN</td>
					<td>:</td>
					<td> <input type="text" name="IDPESAN"></td>
				</tr>
				<tr>
					<td>ID FILM</td>
					<td>:</td>
					<td> <input type="text" name="IDFILM"></td>
				</tr>
				<tr>
					<td>NAMA</td>
					<td>:</td>
					<td> <input type="text"name="NAMA"></td>
				</tr>
				<tr>
					<td>JUMLAH TIKET</td>
					<td>:</td>
					<td> <input type="text"name="JUMLAHTIKET"></td>
				</tr>
				<tr>
					<td>NO KURSI</td>
					<td>:</td>
					<td> <input type="text"name="NOKURSI"></td>
				</tr>
				<tr>
					<td>TANGGAL</td>
					<td>:</td>
					<td> <input type="date"name="TANGGAL"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td> <input type="submit"name="simpan"value="Simpan"></td>
				</tr>
			</table>
			</form>

			
			<!-- Enter 2 -->
			<div class="enter2">
				<div class="head"></div>
			</div>
			<!-- end Enter 2 -->
			
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
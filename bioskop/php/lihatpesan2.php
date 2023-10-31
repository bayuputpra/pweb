
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
			    <li><a class="active" href="../index2.html">HOME</a></li>
			    <li><a href="../in_theeaters2.html">IN THEATERS</a></li>
				<li><a href="../coming_soon2.html">COMING SOON</a></li>
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

            <h1 class="text-h2">DATA TRANSAKSI BIOSKOP</h1>
            <table class="table" border="5">
                <tr>
                    <th>ID PESAN</th>
                    <th>ID FILM</th>
                    <th>NAMA</th>
                    <th>JUMLAH TIKET</th>
                    <th>NO KURSI</th>
					<th>TANGGAL</th>
					<th>OPSI</th>
                </tr>
                <?php
                    $koneksi = mysqli_connect("localhost","root","","tugasakhir_pweb");
                    $data = mysqli_query($koneksi,"SELECT*from pemesan");
                    while($row=mysqli_fetch_array($data))
                    {
                        ?>
                        <tr>
                            <td><?php echo $row["Id_pesan"];?></td>
                            <td><?php echo $row["Kode_film"];?></td>
                            <td><?php echo $row["Nama"];?></td>
                            <td><?php echo $row["Jumlah_tiket"];?></td>
                            <td><?php echo $row["No_kursi"];?></td>
							<td><?php echo $row["Tanggal"];?></td>
							<?php
                            echo "<td><a href='delete.php?Id_pesan=$row[Id_pesan]'>Delete</a></td>";
                            ?>
                        </tr>
                        <?php
                    }
                ?>
            </table>

			<!-- Enter 4 -->
			<div class="enter4">
				<div class="head"></div>
			</div>
            <!-- end Enter 4-->
		</div>
		<!-- end Content -->

	<!-- Footer -->
	<div id="footer">
		<p>
			<a href="../index2.html">HOME</a> <span>|</span>
			<a href="../in_theeaters2.html">IN THEATERS</a> <span>|</span>
			<a href="../coming_soon2.html">COMING SOON </a> <span>|</span>
		</p>
		<p> &copy; 2020 CINEBAY XX1, LLC. All Rights Reserved.</a></p>
	</div>
	<!-- end Footer -->
</div>
<!-- end Shell -->
</body>
</html>
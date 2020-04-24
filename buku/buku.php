<?php
include "konek.php";
include "cek-login.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta charset="UTF-8">
	<title>Sistem Akademik</title>
	<link rel="stylesheet" href="../code/css/style.css" type="text/css">
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="logo">
				<a href="index.html"><img src="../code/images/sikad.png" alt="LOGO"></a>
			</div>
			<form action="logout.php" method="post" class="searchbar">
				<input type="submit" value="Logout">
			</form>
			<ul id="navigation">
<li>
<a href="#"></a><br>
</li>
<li>
<a href="#"></a><br>
</li>
<li>
<a href="#"></a><br>
</li>
<li>
<a href="#"></a><br>
</li>
</ul>
</div>

		<!-- /#header -->
<div id="contents">
<div id="adbox">
<img src="../code/images/kampus.jpg" alt="Img" height="444" width="630">
<div class="info">
<h1>Selamat datang Admin</h1>
<p>Page ini dibuat untuk mengedit status buku diperpustakaan</p>
</div>
</div>
			<!-- /#adbox -->
<div id="about" class="section">
<table border="1">
<tr align="center">
<td>Kode Buku</td>
<td>Nama Buku</td>
<td>Pengarang</td>
<td>Penerbit</td>
<td>Status</td>
<td>Action</td>
</tr>
<?php
$query = "select * from buku";
$hasil = mysql_query($query);
while ($buff = mysql_fetch_array($hasil)) {
?>
<tr>
<td><?php echo $buff['KodeBuku']; ?></td>
<td><?php echo $buff['Nama_Buku']; ?></td>
<td><?php echo $buff['Pengarang']; ?></td>
<td><?php echo $buff['Penerbit']; ?></td>
<td><?php echo $buff['Status']; ?></td>
<td><a href="editbuku.php?KodeBuku=<?php echo $buff['KodeBuku']; ?>">Edit</a> 
</td>
</tr>
<?php
};
?>
</table>
</div>
<ul id="categories" class="section">
		<!-- /#contents -->
		<div id="footer">
				<!-- /#links -->
				<p class="footnote">
			SEKOLAH TINGGI TEKNOLOGI JAWA BARAT © 2014
				</p>
			</div>
		</div>
		<!-- /#footer -->
	</div>
	<!-- /#page -->
</body>
</html>

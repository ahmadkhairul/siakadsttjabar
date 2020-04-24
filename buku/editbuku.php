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
<?php
include "konek.php";
$kb = $_GET['KodeBuku'];
$query = "select * from buku where KodeBuku='$kb'";
$hasil = mysql_query($query);
$buff = mysql_fetch_array($hasil);
?>
<form name="form1" method="post" action="changebuku.php">
<input type="hidden" name="kodebuku" value="<?php echo $buff['KodeBuku']; ?>" />
<table border="1">
<tr>
<td>Kode Buku</td>
<td>:</td>
<td><?php echo $buff['KodeBuku']; ?></td>
</tr>
<tr>
<td>Status</td>
<td>:</td>
<td><input name="status" type="text" value="<?php echo $buff['Status']; ?>" /></td>
</tr>
<tr>
<td colspan="3"><input type="submit" value="Edit" /></td>
</tr>
</table>
</form>
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


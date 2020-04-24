<head>
<title>Perpustakaan</title>
<link rel="stylesheet" href="css/tabels.css" type="text/css">
</head>
<body>
<?php
include "konek.php";
$query = mysql_query("select * from buku");
while ($data=mysql_fetch_array($query)){
?>
<form method="post" action="changebuku.php">
<div class="CSS_Table_Example">
<table border="1">
<tr>

<td>Nama Buku </td>
<td>Penerbit  </td>
<td>Pengarang </td>
<td>Status    </td>
<td>Edit    </td>
</tr>
<tr>
<td> <?php echo $data['Nama_Buku'];?></td>
<td> <?php echo $data['Pengarang']; ?></td>
<td> <?php echo $data['Penerbit'];?></td>
<td> <?php echo $data['Status'];}?></td>
<td><input type="text" name="ganti">|<input type="submit" value="Edit"></td>
</tr>
</table>
</form>
</body>
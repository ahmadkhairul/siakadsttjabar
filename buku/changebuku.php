<?php
include "konek.php";
$kb = $_POST['kodebuku'];
$status = $_POST['status'];
$query = mysql_query("update buku set Status='$status' where KodeBuku='$kb'");
if ($query) header('location:buku.php');
else header('location:buku.php');
?>

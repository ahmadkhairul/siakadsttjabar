<?php
include "konek.php";
include 'cek-login.php';
echo'<html>
<head>
<title>KKS </title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="code/css/tabels.css" type="text/css">
</head>
<body bgcolor="#FFFFFF" marginwidth="0" marginheight="0">
<button id="printbutton" onclick="window.print();"> Cetak</button>
<table border="2" color="000000">
<tr>
<td>
<center>
<img src="code/images/headerkks.jpg" width="600" height="150" border="0" alt=""></center>
<div class="Tableatas">
<table align="center">';
$u = $_SESSION['users'];
$query = mysqli_query($con,"select * from mahasiswa where NIM='$u'");
$data=mysqli_fetch_array($query);
echo'<tr>
	<td>Nama</td>
	<td>:</td>
	<td>'.$data['Nama'].'</td>
	<td>Tahun Akademik</td>
	<td>:</td>
	<td>'.$data['Tahun_Akademik'].'</td>
 </tr>
 <tr>
	<td>NIM</td>
	<td>:</td>
	<td>'.$data['NIM'].'</td>
	<td>Semester</td>
	<td>:</td>
	<td>'.$data['Semester'].'</td>
 </tr>
 <tr>
	<td>Jurusan</td>
	<td>:</td>
	<td>'.$data['Jurusan'].'</td>
	<td>IP Semester yl.</td>
	<td>:</td>
	<td>'.$data['IPyl'].'</td>
 </tr>
 <tr>
	<td>Nama Dosen Wali</td>
	<td>:</td>
	<td>'.$data['Nama_Wali'].'</td>
	<td>IPK semester yl.</td>
	<td>:</td>
	<td>'.$data['IPKyl'].'</td>
 </tr>
 </table>
 </div>
 <br>';
$semester = $data['Semester'];
echo'<div class="CSS_Table_Example">
<table border="1" align="center">
<tr>
	<td rowspan="2">No.<br />Urut</td>
	<td colspan="2">Mata Kuliah</td>
	<td rowspan="2">Kredit(K)</td>
	<td rowspan="2">Huruf Mutu</td>
	<td rowspan="2">Angka Mutu</td>
	<td rowspan="2">K X N</td>
</tr>
<tr>
	<td>Kode </td>
	<td>Nama </td>
</tr>';
$no="1";
$query1 = "SELECT k.kode, k.matakuliah, k.kredit, n.Nilai FROM nilai n, kurikulum k WHERE k.kode = n.id_matkul
AND k.semester = '$semester' AND n.nim = '$u'";
$hasil1 = mysqli_query($con,$query1);
while ($buff1 = mysqli_fetch_array($hasil1)) {
echo'<tr>
<td>'.$no.'</td>
<td>'.$buff1['kode'].'</td>
<td style="text-align:left">'.$buff1['matakuliah'].'</td>
<td>'.$buff1['kredit'].'</td>
<td>';
$test = $buff1['Nilai'];
if ($test > '80'){
    echo"A";
}elseif ($test > '70'){
    echo"B";
}elseif ($test > '60'){
    echo"C";
}elseif ($test > '50'){
    echo"D";
}elseif ($test > '0'){
    echo"E";
}else{
    echo"";
}echo'</td><td>';
$test1 = $buff1['Nilai'];
if ($test1 > '80'){
    $tes="4";
    echo"4";
}elseif ($test1 > '70'){
    $tes="3";
    echo"3";
}elseif ($test1 > '60'){
    $tes="2";
    echo"2";
}elseif ($test1 > '50'){
    $tes="1";
    echo"1";
}elseif ($test1 > '0'){
    $tes="0";
    echo"0";
}else{
    $tes="0";
    echo"";
}echo'</td><td>'; 
$test3 = $buff1['kredit'];
echo ($test3)*($tes); 
$no++;}
echo'</td>
</tr>
</tr>
</table>
<center><img src="code/images/cokorkks.jpg" width="600" height="200" border="0" alt=""></center>
</div>
</td>
</tr>
</table>
</body>
</html>';
?>
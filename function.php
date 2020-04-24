<?php
function head(){
include 'konek.php';
echo'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta charset="UTF-8" />
<title>Sistem Akademik</title>
<link rel="stylesheet" href="code/css/style.css" type="text/css" />
</head>
<body>
<div id="page">
<div id="header">
<div id="logo">
<a href="index.html"><img src="code/images/sikad.png" alt="LOGO"></a>
</div>
<form action="index.php?pag=logout" method="post" class="searchbar">
<input type="submit" value="Logout" />
</form>
<ul id="navigation">
<li>
<a href="index.php">Beranda</a><br>
</li>
<li>
<a href="index.php?pag=trans">Transkip</a><br>
</li>
<li>
<a href="index.php?pag=keuangan">Keuangan</a><br>
</li>
<li>
<a href="index.php?pag=perwalian">Perwalian Online</a><br>
</li>
</ul>
</div>
<!-- /#header -->
<div id="contents">
<div id="adbox">
<img src="code/images/kampus.jpg" alt="Img" height="444" width="630">
<div class="info">
<h1>Sistem Akademik STT JABAR</h1>
<p>Sistem akademik STT Jabar dibuat untuk memudahkan mahasiswa untuk melaksanakan kegiatan keakademikan secara online</p>
</div>
</div>';
}function datamhs(){
include 'konek.php';
echo'
<div id="about" class="section">
<div id="kiri">
<div id="cssmenu">
<ul>
   <li><a href="index.php?pag=pas"><span>Ubah Password</span></a></li>
   <li><a href="index.php?pag=lib"><span>Buku Perpustakaan<span></a></a></li>
   <li><a href="index.php?pag=datamhs"><span>Data Mahasiswa</span></a></li>
   <li><a href="index.php?pag=nilai"><span>Nilai</span></a></li>
   <li><a href="bek-ap/help.pdf"><span>Help</span></a></li>
   </ul>
</div>
</div>
<form method="post" action="index.php?pag=mhssimpan">';
$u = $_SESSION['users'];
$query = mysqli_query($con,"select * from mahasiswa where NIM='$u'");
$data  = mysqli_fetch_array($query);
echo'<div id="kanan">
<h1>Data Mahasiswa</h1>
  <table>
  <tr>
	<td>Nama</td>
	<td>:</td>
	<td><input type="text" value="'.$data['Nama'].'" name="nama" readonly></td>
  </tr>
  <tr>
	<td>NIM</td>
	<td>:</td>
	<td><input type="text" value="'.$data['NIM'].'" name="nim" readonly></td>
  </tr>
  <tr>
	<td>Nama Wali</td>
	<td>:</td>
	<td><input type="text" value="'.$data['Nama_Wali'].'" name="wali"></td>
  </tr>
  <tr>
	<td>Tahun Akademik</td>
	<td>:</td>
	<td><input type="text" value="'.$data['Tahun_Akademik'].'" name="angkatan"></td>
  </tr>
 <tr>
	<td>Semester</td>
	<td>:</td>
	<td><select name="semester">
		<option value="1" selected>1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
	</select></td>
  </tr>
<tr>
	<td>IPyl</td>
	<td>:</td>
	<td><input type="text" value="'.$data['IPyl'].'" name="ipyl"></td>
  </tr>
<tr>
	<td>IPKyl</td>
	<td>:</td>
	<td><input type="text" value="'.$data['IPKyl'].'" name="ipkyl"></td>
  </tr>
<tr>
	<td>Jurusan</td>
	<td>:</td>
	<td><input type="text" value="'.$data['Jurusan'].'" name="jurusan" readonly>
 </tr>
  </table>
  <input type="reset" value="Reset">
  <input type="submit" value="Simpan">
  </div>
  <div id="kanan"> 
  <p> Catatan :<br>
    1. sesuaikan terlebih dahulu sebelum disimpan (data yang anda masukan harus yang tepat sesuai dengan KRS/KKS yang ingin anda cetak)<br>
 	2. Data ini dibutuhkan untuk pemutakhiran data mahasiswa STT Jabar<br>
	3. Seluruh Mahasiswa harus mengisi form ini beritahukan kepada yang lain<br>
	4. Mengisi ini adalah salah satu syarat melakukan perwalian secara online<br>
	5. Keterangan Dosen Wali :</p>
	<table border="1">
	<tr>
		<td width="140">Jurusan</td>
		<td width="134">Nama Dosen</td>
	</tr>
	<tr>
		<td>Teknik Industri</td>
		<td>Nurwathi, MT.</td>
	</tr>
	<tr>
		<td>Teknik Sipil</td>
		<td>Dani Setiawan, MT.</td>
	</tr>
	<tr>
		<td>Teknik Elektro</td>
		<td>Yudi Barnadi, ST.</td>
	</tr>
	<tr>
		<td>Teknik Mesin</td>
		<td>M. Saidiman, MT.</td>
	</tr>
	<tr>
		<td>Teknik Mesin Otomotif</td>
		<td>Udin Komarudin, Ir.</td>
	</tr>
	</table>
    </div>
	</div>
	</div>
';
}
function home(){
include 'konek.php';
echo'
<div id="about" class="section">
<div id="kiri">
<div id="cssmenu">
<ul>
   <li><a href="index.php?pag=pas"><span>Ubah Password</span></a></li>
   <li><a href="index.php?pag=lib"><span>Buku Perpustakaan<span></a></a></li>
   <li><a href="index.php?pag=datamhs"><span>Data Mahasiswa</span></a></li>
   <li><a href="index.php?pag=nilai"><span>Nilai</span></a></li>
   <li><a href="bek-ap/help.pdf"><span>Help</span></a></li>
   </ul>
</div>
</div>
<div id="kanan">
<h1>Sistem Akademik</h1>
<p>Selamat datang disistem Akademik sistem ini dirancang untuk memberikan pelayanan Akademik secara komputerisasi online, sistem ini dapat memudahkan anda dalam melaksanakan kegiatan Akademik seperti melihat nilai, melaksanakan perwalian(mengisi KRS/KKS),mengisi data Mahasiswa, mengunduh transkip, melihat status pembayaran, dll.
dibawah ini adalah data mahasiswa anda, data mahasiswa ini diperlukan untuk pemutakhiran sistem, perwalian online,dll. Jika masih kosong berarti anda belum kami belum memiliki data anda, harap sesuaikan data mahasiswa ini dengan KRS/KKS yg ingin anda cetak anda dapat mencetak KRS <a href="index.php?pag=perwalian">di sini</a> dan mengubah/menginput data anda <a href="index.php?pag=datamhs">di sini</a>';
$u = $_SESSION['users'];
$query = mysqli_query($con,"select * from mahasiswa where NIM='$u'");
$data=mysqli_fetch_array($query);
echo'<table><tr><td>Nama <td>:</td><td>'.$data['Nama'].'</td></tr>
<tr><td>NIM </td><td>:</td><td> '.$data['NIM'].'</td></tr>
<tr><td>Jurusan </td><td>:</td><td> '.$data['Jurusan'].'</td></tr>
<tr><td>Tahun Akademik </td><td>:</td><td> '.$data['Tahun_Akademik'].'</td></tr>
<tr><td>Semester </td><td>:</td><td> '.$data['Semester'].'</td></tr>
<tr><td>Indeks Prestasi yl. </td><td>:</td><td> '.$data['IPyl'].'</td></tr>
<tr><td>Indeks Prestasi Kumulatif s/d Semester yl. </td><td>:</td><td> '.$data['IPKyl'].'</td></tr>
</table>
</p>
</div>
</div>
</div>';
}function keuangan(){
include 'konek.php';
echo'<div id="about" class="section">
<h1>Keuangan</h1>';
$u = $_SESSION['users'];
$query = mysqli_query($con,"select * from transaksi where NIM='$u' order by 'tanggal' limit 5");
echo'<p>Dalam sistem informasi autodebet online ini memperlihatkan data keuangan/ transaksi mahasiswa.</br>
Selain kemudahan bagi mahasiswa, data-data keuangan dalam sistem ini bisa diakses oleh program studi , Fakultas maupun oleh pihak Universitas </br>
Sistem autodebet ini masih dalam uji coba hanya menampilkan 5 data transaksi terakhir anda untuk data transaksi yang lebih lengkap HUB Bag. Keuangan</p>
<table border="1">
<tr>
	<td>Taggal Bayar</td>
	<td>Jenis Pembayaran</td>
	<td>Jumlah Pembayaran</td>
    <td>Keterangan</td>
</tr>';
while($data=mysqli_fetch_array($query)){
echo'<tr>
	<td>'.$data['tanggal'].'</td>
	<td>'.$data['transaksi'].'</td>
	<td>'.$data['jumlah'].'</td>
    <td>'.$data['keterangan'].'</td>
</tr>';}
echo'</table>
</div>
</div>';
}function trans(){
include 'konek.php';
echo'<div id="about" class="section">
<h1>Transkip</h1>
<p>Transkip Akademik yg anda unduh disini sesuai dengan transkip akademik yg bisa anda dapatkan dr BAAK Bag. Registrasi Statistik jika ada kekeliruan data Nilai anda segera hub. Bag. Registrasi Statistik</p>';
$u = $_SESSION['users'];
$query2 = mysqli_query($con,"select * from member where username='$u'");
$no=1;
$jum_bar=3;
while ($row=mysqli_fetch_array($query2)){
echo "<a href='code/trans/$row[transkip]'>Download Transkip Anda Disini</a>";
if ($no % $jum_bar==0){
echo "</br>"; 
}
$no++;
}
echo'</div></div>';
}function nilai(){
echo'<div id="about" class="section">
<div id="kiri">
<div id="cssmenu">
<ul>
   <li><a href="index.php?pag=pas"><span>Ubah Password</span></a></li>
   <li><a href="index.php?pag=lib"><span>Buku Perpustakaan<span></a></a></li>
   <li><a href="index.php?pag=datamhs"><span>Data Mahasiswa</span></a></li>
   <li><a href="index.php?pag=nilai"><span>Nilai</span></a></li>
    <li><a href="bek-ap/help.pdf"><span>Help</span></a></li>
   </ul>
</div>
</div>
<h1> Nilai Mata Kuliah </h1>
<form method="post" action="index.php?pag=searchnilai">
<table>
<tr>
	<td>Nama</td>
	<td>:</td>
	<td><Input type="text" name="nama"></td>
</tr>
<tr>
	<td>Mata Kuliah</td>
	<td>:</td>
	<td><Input type="text" name="matkul"></td>
</tr>
<tr>
	<td>Jurusan</td>
	<td>:</td>
	<td><select name="jurusan">
		<option value="Teknik Industri" selected>Teknik Industri</option>
		<option value="Teknik Mesin">Teknik Mesin</option>
		<option value="Teknik Elektro">Teknik Elektro</option>
		<option value="Teknik Mesin Otomotif">Teknik Mesin Otomotif</option>
		<option value="Teknik Sipil">Teknik Sipil</option>
		</td>
  </tr>
  <tr>
	<td>Semester</td>
	<td>:</td>
	<td><select name="semester">
		<option value="1" selected>1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
	</select></td>
  </tr>
</table>
<input type="submit" value="Search">
<input type="reset" value="Reset">
</form>
<p>Nilai yang ditampilkan adalah nilai sesuai dengan transkip nilai anda, Semester diatas adalah semester mata kuliah, bila nilai anda tidak tercantum harap hubungi Admin,nilai akan diupdate setelah nilai keluar diakhir semester 
</p>
<p>
-Ahmad Khairul-
</p>
</div>
</div>';
}function pas(){
echo'<div id="about" class="section">
<div id="kiri">
<div id="cssmenu">
<ul>
   <li><a href="index.php?pag=pas"><span>Ubah Password</span></a></li>
   <li><a href="index.php?pag=lib"><span>Buku Perpustakaan<span></a></a></li>
   <li><a href="index.php?pag=datamhs"><span>Data Mahasiswa</span></a></li>
   <li><a href="index.php?pag=nilai"><span>Nilai</span></a></li>
    <li><a href="bek-ap/help.pdf"><span>Help</span></a></li>
   </ul>
</div>
</div>
<div id="kanan">
<h1>Password</h1>
<p>password digunakan untuk login kedalam sistem, ingat baik-baik password anda, jika anda suatu saat lupa password anda hub. Admin untuk mereset ulang password anda, harap ganti password anda secara berkala, gunakan phrase yg sulit namun mudah anda ingat.<b>(Password yang direset akan menjadi 12345)</b>.
<form method="post" action="index.php?pag=pass">
<table border="0">
<tr>
<td>Password Baru</td>
<td>:</td>
<td><input type="password" name="passwordbaru"></td>
<td><input type="submit" value="Ubah Password"></td>
</tr>
</table>
</form>
</div>
</div>
</div>';
}
function pass(){
include 'konek.php';
$username	  = $_SESSION['users'];
$passwordbaru = $_POST['passwordbaru'];
$query = "UPDATE member SET password = '$passwordbaru'
		  WHERE username = '$username'";
$hasil = mysqli_query($con,$query);
if ($hasil) echo "<script>alert('Password Berhasil diubah');document.location.replace('index.php?pag=pas');</script>";
else echo "<script>alert('Maaf Password Gagal Diubah');document.location.replace('index.php?pag=pas');</script>";
}function foot(){
echo'<ul id="categories" class="section"></ul>
<!-- /#contents -->
<div id="footer">
<!-- /#links -->
<p class="footnote">
SEKOLAH TINGGI TEKNOLOGI JAWA BARAT © 2014
</p>
</div>
</body>
</html>';
}function mhssimpan(){
include 'konek.php';
$nama			= $_POST['nama'];
$nim			= $_POST['nim'];
$wali			= $_POST['wali'];
$angkatan		= $_POST['angkatan'];
$semester		= $_POST['semester'];
$ipyl			= $_POST['ipyl'];
$ipkyl			= $_POST['ipkyl'];
$jurusan		= $_POST['jurusan'];
$query = mysqli_query($con,"select * from mahasiswa where NIM='$nim'");
$result = mysqli_fetch_array($query);
$row = mysqli_num_rows($query);
if ($wali=='' or $angkatan=='' or $ipyl=='' or $ipkyl==''){
echo "<script>alert('Tidak Boleh Ada Form Yang Kosong');document.location.replace('index.php?pag=datamhs');</script>";
}else{
if ($row != 1){
$query = "insert into mahasiswa values ('$nama','$nim','$wali','$angkatan','$semester','$ipyl','$ipkyl','$jurusan')";
$hasil = mysqli_query($con,$query);
if ($hasil) echo "<script>alert('Data Telah Masuk');document.location.replace('index.php?pag=datamhs');</script>";
else echo "<script>alert('Data Gagal Masuk');document.location.replace('index.php?pag=datamhs');</script>";
}else{
$query = "update mahasiswa set Nama_Wali='$wali', Tahun_Akademik='$angkatan', Semester='$semester', IPyl='$ipyl', IPKyl='$ipkyl', Jurusan='$jurusan' Where	NIM='$nim'";
$hasil = mysqli_query($con,$query);
if ($hasil) echo "<script>alert('Data Telah Berhasil Di Ubah');document.location.replace('index.php?pag=datamhs');</script>";
else echo "<script>alert('Data Gagal Masuk');document.location.replace('index.php?pag=datamhs');</script>";
}
}
}function lib(){
include 'konek.php';
echo'<div id="about" class="section">
<div id="kiri">
<div id="cssmenu">
<ul>
   <li><a href="index.php?pag=pas"><span>Ubah Password</span></a></li>
   <li><a href="index.php?pag=lib"><span>Buku Perpustakaan<span></a></a></li>
   <li><a href="index.php?pag=datamhs"><span>Data Mahasiswa</span></a></li>
   <li><a href="index.php?pag=nilai"><span>Nilai</span></a></li>
    <li><a href="bek-ap/help.pdf"><span>Help</span></a></li>
   </ul>
</div>
</div>
<table border="1">
<tr align="center">
<td>Kode Buku</td>
<td>Nama Buku</td>
<td>Pengarang</td>
<td>Penerbit</td>
<td>Status</td>
</tr>';
$query = "select * from buku";
$hasil = mysqli_query($con,$query);
$jumlah=mysqli_num_rows($hasil);
echo  "<h1>Daftar Buku Perpustakaan STT Jabar</h1>";
echo  "<font face='calibri'><h2>Jumlah Buku Yang Kami Miliki : ".$jumlah;
echo  "<font face='calibri'><h5>Silahkan cek ketersediaan buku yang anda ingin pinjam di Perpustakaan STT Jabar";
$dataPerPage = 20;
if(isset($_GET['page']))
{
    $noPage = $_GET['page'];
} else { 
    $noPage = 1;
}

$offset = ($noPage - 1) * $dataPerPage;
$has = mysqli_query($con,"select * from buku order by KodeBuku desc LIMIT $offset, $dataPerPage");

while($buff=mysqli_fetch_array($has)){
echo '<tr>
<td>'.$buff['KodeBuku'].'</td>
<td>'.$buff['Nama_Buku'].'</td>
<td>'.$buff['Pengarang'].'</td>
<td>'.$buff['Penerbit'].'</td>
<td>'.$buff['Status'].'</td>
</tr>';
}
echo'</table></div></div>';
$query  = "SELECT COUNT(*) AS jumData FROM buku";
$hasil  = mysqli_query($con,$query);
$data  = mysqli_fetch_array($hasil);
$jumData = $data['jumData'];
$jumPage = ceil($jumData/$dataPerPage);
echo "<ul class='tsc_pagination tsc_paginationA tsc_paginationA01'>";
if ($noPage > 1) echo  "<li><a href='".$_SERVER['PHP_SELF']."?pag=lib&page=".($noPage-1)."' class='previous'>Prev</a></li>";
for($page = 1; $page <= $jumPage; $page++)
{
         if ((($page >= $noPage - 1) && ($page <= $noPage + 1)) || ($page == 1) || ($page == $jumPage))
         {
            if (isset($showPage)){
            if (($showPage == 1) && ($page != 2))  echo "<li><a href='#'>...</a></li>";
            if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "<li><a href='#'>...</a></li>";
            }
            if ($page == $noPage) echo "<li><a href='#' class='current'><b>".$page."</b></a></li>";
            else echo "<li><a href='".$_SERVER['PHP_SELF']."?pag=lib&page=".$page."'>".$page."</a></li>";
            $showPage = $page;
            
         }
}
if ($noPage < $jumPage) echo "<li><a href='".$_SERVER['PHP_SELF']."?pag=lib&page=".($noPage+1)."' class='next'>Next</a></li></ul>";
}
echo'';
function perwalian(){
echo"<div id='about' class='section'>
<div id='kiri'>
<div id='cssmenu'>
<ul>
   <li><a href='KRS.php'><span>Kartu Rencana Studi</span></a></li>
   <li><a href='KKS.php'><span>Kartu Kemajuan Studi<span></a></a></li>
    </ul>
</div>
</div>
<div id='kanan'>
<h1>KRS & KKS</h1>
<table>
<tr>
<td>
<p>
Jangan lupa mengecek semester di <a href='index.php?pag=datamhs'>data mahasiswa</a>, sistem ini tidak hanya dapat mencetak KKS atau KRS semester sekarang 
jadi, pastikan bahwa semester di <a href='index.php?pag=datamhs'>data mahasiswa</a> sesuai dengan semester KKS atau KRS yg ingin anda cetak.
Untuk KKS jika ada yang kosong berarti matakuliah tersebut nilai anda belum keluar harap bersabar.
Untuk KRS adalah sistem paket jadi anda mengambil mata kuliah sesuai dengan paket yg telah ditentukan.
Hub. Dosen Wali dan Ka. BAAK setelah KRS / KKS anda telah dicetak untuk melakukan konsultasi Akademik dan mengesahkan KKS / KRS anda <i>(ditandai dengan dibubuhkannya tanda tangan Ka.BAAK dan Dosen Wali dikolom yang telah tersedia)</i>.
<b>Pastikan melaksanakan Perwalian terlebih dahulu sebelum memulai perkuliahan</b>
</p> 
<br />
<br />
<p>-Ahmad Khairul-</p>
</td>
</tr>
</table>
</div>
</div>
</div>";
}function searchnilai(){
include "konek.php";
echo'<div id="about" class="section">
<h1>Daftar Nilai Mahasiswa</h1>
<h3>Bagi mahasiswa/i yg nilainya belum ada di daftar disarankan untuk menghubungi dosen yang bersangkutan atau Ka. BAAK</h3>';
$nama		=$_POST['nama'];
$matkul		=$_POST['matkul'];
$semester	=$_POST['semester'];
$jurusan	=$_POST['jurusan'];
echo'<table border="1" >
<tr>
	<td>Nama Mahasiswa</td>
	<td>Mata_Kuliah</td>
	<td>Nilai</td>
	<td>Semester</td>
	<td>Jurusan</td>
</tr>';
$query ="select m.nama, k.matakuliah, n.nilai, m.jurusan, k.semester from
nilai n, kurikulum k, mahasiswa m where
m.nama like '%$nama%' and
k.matakuliah like '%$matkul%' and
k.semester like '%$semester%' and
m.jurusan like '%$jurusan%' and
m.jurusan = k.jurusan and
n.nim = m.nim and
n.id_matkul = k.kode 
";
$hasil = mysqli_query($con,$query);
$jumlah=mysqli_num_rows($hasil);
while ($buff = mysqli_fetch_array($hasil)) {
echo'<tr>
<td style="text-align:left">'.$buff['nama'].'</td>
<td style="text-align:left">'.$buff['matakuliah'].'</td>
<td style="text-align:center">'.$buff['nilai'].'</td>
<td style="text-align:center">'.$buff['semester'].'</td>
<td style="text-align:center">'.$buff['jurusan'].'</td>
</tr>';
}; 
echo'</table>
</div></div>';
}
function logout(){
session_start();
session_destroy();
header('location:login.php');
}
?>
<?php
    include "konek.php";
    $u = $_POST['u'];
	$p = $_POST['p'];
	$query = mysqli_query($con,"select * from member where username='$u'");
	$result = mysqli_fetch_array($query);
	$row = mysqli_num_rows($query);
	if (($u == "") && ($p == "")){
		echo "<script>alert('Maaf username atau password belum terisi');javascript:history.go(-1);</script>";
	}
	if ($row != 0){
		if ($p != $result['password']){
			echo "<script>alert('Maaf username atau password salah');javascript:history.go(-1);</script>";
		}else{
		    session_start();
			$_SESSION['users']=$u;
			echo "<script>alert('Login Success');document.location.replace('index.php');</script>";	
		}
	}else{
		echo "<script>alert('Maaf username belum terdaftar');javascript:history.go(-1);</script>";
	}
?>
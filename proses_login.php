<?php
$pengguna=$_POST["nama_pengguna"];
$password=$_POST["sandi_pengguna"];
include "koneksi.php";
$kueri=mysqli_query($konek,'SELECT * FROM tb_pengguna WHERE nama_pengguna="'.$pengguna.'" AND sandi_pengguna="'.$password.'"');
if(mysqli_num_rows($kueri)>0){
	// ini nanti di redirect ke halaman utama
	header("location:lihat_penggunaa.php");
}else{
		// ini nanti di redirect ke halaman login
	header("location:login.html");	
}
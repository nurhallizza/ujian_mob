<?php 
include "koneksi.php";
$nama=$_POST['nama_pengguna'];
$password=$_POST['boleeeh'];
$query="UPDATE tb_pengguna SET sandi_pengguna='$password' WHERE  nama_pengguna='$nama'";
if(empty($nama)&&empty($password)){
	echo "<script language='javascript'>alert('Maaf Tidak Ada Perubahan Data')
		window.location.href='lihat_pengguna.php'
	</script>";
		
}else if(empty($nama)){
	mysqli_query($konek,"UPDATE tb_pengguna SET sandi_pengguna='".$password."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}else{
	mysqli_query($konek,"UPDATE tb_pengguna SET nama_pengguna='".$nama."' WHERE id_pengguna='".$id."'");
	header("location:lihat_pengguna.php");
}
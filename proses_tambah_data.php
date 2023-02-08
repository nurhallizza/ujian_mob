<?php 
include "koneksi.php";
$id=$_POST['nurhaliza'];
$nama=$_POST['name'];
$password=$_POST['gatauu'];
mysqli_query($konek,"INSERT INTO tb_pengguna (id_pengguna,nama_pengguna,sandi_pengguna) VALUES ('".$id."','".$nama."','".$password."')");
header("location:lihat_pengguna.php");
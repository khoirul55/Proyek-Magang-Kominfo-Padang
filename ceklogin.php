<?php
include"config.php";
$username = $_POST['username'];
$password = $_POST['password'];
$ceklogin = mysqli_query($con,"SELECT * from tb_admin where username='$username' && password='$password'");
$ceklogin_cus = mysqli_query($con,"SELECT * from tb_user where username='$username' && password='$password'");
$datacus = mysqli_fetch_array($ceklogin_cus);
$data = mysqli_fetch_array($ceklogin);
$cekuser = $data['username'];
$cekuser_cus = $datacus['username'];
$nama_cus = $datacus['nama'];
$nama = $data['nama'];
$id = $datacus['id_user'];
if($cekuser==$username)
{
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama;
	header("location:page/admin/index.php?page=buku");
}
else if ($cekuser_cus==$username) 
{
    session_start();
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $nama_cus;
	$_SESSION['id_user'] = $id;
	header("location:homepage.php");	
}
else
{
	echo "Anda gagal melakukan login!!!";
	header("location:login.php?pesan=gagal");
}
?>
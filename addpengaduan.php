
<?php
include"config.php";
$nama = $_POST['nama'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$qrycus = mysqli_query($con,"SELECT * from tb_pengaduan  where email='$email' && message='$message'");
$datacus = mysqli_fetch_array($qrycus);
$usercus = $datacus['email'];
$passcus = $datacus['message'];
if($usercus==$email && $passcus==$message)
{
	echo "Anda gagal melakukan pengaduan!!!";
	header("location:berhasil.php");
}
else{
	mysqli_query($con,"INSERT into tb_pengaduan set nama='$nama', email='$email', subject='$subject', message='$message'");
	echo "Anda berhasil melakukan pengaduan!!!";
	header("location:berhasil.php");
}
?>
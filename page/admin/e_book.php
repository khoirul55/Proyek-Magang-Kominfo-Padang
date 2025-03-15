<?php
include("../../config.php");
$a = $_POST['id_user'];
$b = $_POST['nama'];
$c = $_POST['username'];
$d = $_POST['password'];

mysqli_query($con, "UPDATE tb_user SET nama='$b', username='$c', password='$d' WHERE id_user='$a'");
header("location: index.php?page=buku");
?>

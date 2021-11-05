<?php
include "koneksi.php";
$id_users = $_POST['id_users'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['password'];
$sql = "INSERT INTO users VALUES ('$id_users', '$pass', '$nama','$email')";
$query=mysqli_query($koneksi, $sql);
mysqli_close($koneksi);
header('location:tampil_user.php');
?>
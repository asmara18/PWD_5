<?php
include "koneksi.php";
$sql="delete from users where id_users= '$_GET[id]'";
mysqli_query($koneksi, $sql);
 mysqli_close($koneksi);
header('location:tampil_user.php');
?>
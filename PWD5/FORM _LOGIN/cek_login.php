<?php
include "koneksi.php";
$id_user = $_POST['id_user'];
$pass=$_POST['paswd'];
$sql="SELECT * FROM form WHERE id_user='$id_user' AND paswd='$pass'";
$login=mysqli_query($koneksi,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);
if ($ketemu > 0){
 session_start();
 $_SESSION['iduser'] = $r['id_user'];
 $_SESSION['passuser'] = $r['paswd'];
echo"USER BERHASIL LOGIN<br>";
echo "id user =",$_SESSION['iduser'],"<br>";
echo "paswd=",$_SESSION['passuser'],"<br>";
echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}
else{
echo "<center>Login gagal! username & paswd tidak benar<br>";
echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($koneksi);
?>
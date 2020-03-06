<?php
include '../conn/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$user = mysqli_real_escape_string($koneksi, $_POST['username']);
$pass = mysqli_real_escape_string($koneksi, $_POST['password']);
//$pass = md5($pass); 
$email = $_POST['email'];
$foto = $_FILES['foto'];
$level = $_POST['level'];
	
	
$input = mysqli_query($koneksi,"UPDATE tbl_user SET nama='$nama',
										username='$user',
										password='$pass',
										email='$email',
										foto='$foto',
										level='$level'
										WHERE id='$id'");
if ($input) {
	echo "<script> alert('Data berhasil Dirubah') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=user'>";	
}
else {
	echo "<script> alert('Data Gagal dirubah') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=user'>";	
}

?>
<?php
include '../conn/koneksi.php';
	$nama = $_POST['nama'];
	$user = mysqli_real_escape_string($koneksi, $_POST['username']);
	$pass = mysqli_real_escape_string($koneksi, $_POST['password']);
	//$pass = md5($pass); 
	$email = $_POST['email'];
	$foto = $_POST['foto'];
	$level = $_POST['level'];

 $input = mysqli_query($koneksi,"INSERT into tbl_user values('','$nama','$user','$pass','$email','$foto','$level')");
  
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=user'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=user'>";	
}
?>

<?php
include 'conn/koneksi.php';
if(isset($_POST['log'])) {
	$user = mysqli_real_escape_string($koneksi, $_POST['user']);
	$pass = mysqli_real_escape_string($koneksi, $_POST['pass']); 
	//$pass = md5($pass);
	$sql = mysqli_query($koneksi, "SELECT * FROM tbl_user where username='$user' and password='$pass'");
	$data = mysqli_fetch_array($sql);
	$username = $data['username'];
	$nama = $data['nama'];
	$password = $data['password'];
	$level = $data['level'];
	

	if ($user==$username && $pass==$password) {
		session_start();
		$_SESSION['nama']=$nama;
		$_SESSION['level']=$level;
		if ($level=='admin') {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
		}
		else {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=anggota/index.php'>";
	
		}
		if ($level=='operator') {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=operator/index.php'>";
		}
		
		else{
			if ($level=='pimpinan') {
			echo "<script>alert('Anda berhasil Log In. Sebagai : $level');</script>";
			echo "<meta http-equiv='refresh' content='0; url=pimpinan/index.php'>";
			}
		}
		
	
	} else {
			echo "<meta http-equiv='refresh' content='0; url=index.php'>";
			echo "<script>alert('Username dan password anda salah, Silahkan login kembali !');</script>";
	}
	
	
}

?>
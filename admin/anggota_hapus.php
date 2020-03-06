<?php
include '../conn/koneksi.php';

$nim= $_GET['nim'];

$sql = "DELETE FROM `tbl_anggota` WHERE `nim` = '$nim'";

$query = mysqli_query($koneksi ,$sql);
if ($query == 1) {
		echo "<script>alert('Data berhasil dihapus')</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";
	} else {
		echo "Data anda gagal dihapus. Ulangi sekali lagi";
		echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>"; 
	}


?>
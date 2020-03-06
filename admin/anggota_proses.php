<?php
include '../conn/koneksi.php';

$nim = $_POST ['nim'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk	= $_POST['jk'];
$prodi = $_POST['prodi'];
$thn_masuk = $_POST['thn_masuk'];


 $input = mysqli_query($koneksi,"INSERT into tbl_anggota values('$nim','$nama','$tempat_lahir','$tgl_lahir','$jk','$prodi','$thn_masuk')");
 
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota_detil&nim=$nim'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota_input'>";
}

?>

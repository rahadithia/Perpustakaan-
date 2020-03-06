<?php
include '../conn/koneksi.php';

$nim = $_POST['nim'];
$nim1 = $_POST ['nim1'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk	= $_POST['jk'];
$prodi = $_POST['prodi'];
$thn_masuk = $_POST['thn_masuk'];

 $input = mysqli_query($koneksi,"UPDATE tbl_anggota SET nim='$nim1',
 											nama='$nama',
											tempat_lahir='$tempat_lahir',
											tgl_lahir='$tgl_lahir',
											jk='$jk',
											prodi='$prodi',
											thn_masuk='$thn_masuk'
											where nim='$nim'
											");
 
if ($input) {
	echo "<script> alert('Data berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=anggota'>";	
}
else {
	echo "<script> alert('Data Gagal Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input-anggota'>";
}

?>

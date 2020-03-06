<?php
include '../conn/koneksi.php';

$id = $_POST ['id'];
$judul = $_POST ['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['thn_terbit'];
$isbn	= $_POST['isbn'];
$jumlah = $_POST['jumlah_buku'];
$lokasi = $_POST['lokasi'];

 $input = mysqli_query($koneksi, "UPDATE tbl_buku SET judul='$judul',
 										 pengarang='$pengarang',
										 penerbit='$penerbit',
										 thn_terbit='$tahun',
										 isbn='$isbn',
										 jumlah_buku='$jumlah',
										 lokasi='$lokasi'
										 WHERE id='$id'");
 
if ($input) {
	echo "<script> alert('Data Berhasil Di Update') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=buku'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=edit-buku&id=$id'>";
}

?>

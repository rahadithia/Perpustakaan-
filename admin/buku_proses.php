<?php
include '../conn/koneksi.php';

$judul = $_POST ['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['thn_terbit'];
$isbn	= $_POST['isbn'];
$jumlah = $_POST['jumlah_buku'];
$lokasi = $_POST['lokasi'];
$tgl_input = $_POST['tgl_input'];
		

 $input = mysqli_query($koneksi, "INSERT into tbl_buku values('','$judul','$pengarang','$penerbit','$tahun','$isbn','$jumlah','$lokasi','$tgl_input')");
 
if ($input) {
	echo "<script> alert('Data berhasil Ditambahkan') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=detil-buku&judul=$judul'>";	
}
else {
	echo "<script> alert('Data Gagal Di Input') </script>";
	echo "<meta http-equiv='refresh' content='0; url=?page=input-buku'>";	
}

?>

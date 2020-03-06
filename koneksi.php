<?php 
/*$servername = "localhost";
$user		= "root";
$pasword	= "";
$db			= "perpus";

$koneksi = mysqli_connect ($servername,$user, $pasword)
			or die ('gagal terkoneksi'.mysql_error());
			
$database = mysqli_select_db ($db)
			or die ('gagal terhubung ke database'.mysql_error());
*/?>

<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "perpus";
 
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
	echo 'Koneksi Berhasil';
}
?>
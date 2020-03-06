<!--versi PHP 5-->
<?php
/*$db_host	= "localhost";
$db_user	= "root";
$db_pass	= "";
$db_name	= "db_perpus";

$konek	= mysqli_connect($db_host,$db_user,$db_pass) or die ("Gagal koneksi ke server");
mysql_select_db($db_name, $konek) or die ("Gagal mengaktifkan database".mysqli_error());

$denda1=500;*/
?>

<!--versi PHP 7-->
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_perpus";
 
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
 
if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
	
}
$denda1 = 500;
?>
<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>
<!DOCTYPE html> 
<html lang="en"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Perpustakaan Online </title>
<link rel="stylesheet" type="text/css" href="../style/style.css" />
</head>

<body>
<!-- menu main sebagai div Utama -->

<div id="main">
	<!-- menu Header -->
    <div id="header">
    <img src="../images/deka.gif" style="width:950px; height:150px;"/>
    </div>
    
    <!-- menu Header -->
    <div id="menu-atas">
    	<div id="menu_user">
        <span><?=$_SESSION['nama'];?></span>
        </div>
        <div id="menu_tanggal" align="right">
        <span><?php
		 	$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
 			$hr = $array_hr[date('N')];
			$tgl= date('j');
			$array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
			$bln = $array_bln[date('n')];
			$thn = date('Y');
			echo $hr . ", " . $tgl . " " . $bln . " " . $thn . " ";
			?>
        </span>
        </div>
    </div>
    <br>
	
	<div id="clockDisplay" class="clockStyle" align="center">

</div>
<script type="text/javascript" language="javascript">
function renderTime(){
 var currentTime = new Date();
 var h = currentTime.getHours();
 var m = currentTime.getMinutes();
 var s = currentTime.getSeconds();
 if (h == 0){
  h = 24;
   }
   if (h < 10){
    h = "0" + h;
    }
    if (m < 10){
    m = "0" + m;
    }
    if (s < 10){
    s = "0" + s;
    }
 var myClock = document.getElementById('clockDisplay');
 myClock.textContent = h + ":" + m + ":" + s + "";    
 setTimeout ('renderTime()',1000);
 }
 renderTime();
</script>
    </br>
	<br>
    
<div>    
    <!-- menu Kiri -->
 	<div id="menu-kiri">
    	<div id="bg_menu">Menu Utama
    	</div>
    	<div id="left_menu">
        	<a href="index.php" class="menu">Home </a> <br />
        	<a href="?page=buku" class="menu">Buku </a> <br />
        	<a href="?page=anggota" class="menu">Anggota </a> <br />
        	<a href="?page=transaksi" class="menu">Peminjaman</a> <br />
            <a href="?page=laporan" class="menu">Laporan </a> <br />
			 <a href="?page=grafik" class="menu">Grafik </a> <br />
            <a href="?page=user" class="menu">User </a> <br />
            <a href="../logout.php" class="menu">Logout </a> <br />
        </div>
    </div>
	    
    	     <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "../home.php";
						break;
				

						// menu buku				
						case "buku";
						include "buku_data.php";
						break;
						case "detil-buku";
						include "buku_detil.php";
						break;
						case "buku_input";
						include "buku_input.php";
						break;
						case "buku_proses";
						include "buku_proses.php";
						break;
						case "buku_search";
						include "buku_search.php";
						break;
						case "buku_edit";
						include "buku_edit.php";
						break;
						case "buku_proses_edit";
						include "buku_proses_edit.php";
						break;
						case "buku_hapus";
						include "buku_hapus.php";
						break;
												
						// anggota
						case "anggota";
						include "anggota_data.php";
						break;
						case "anggota_detil";
						include "anggota_detil.php";
						break;
						case "anggota_input";
						include "anggota_input.php";
						break;
						case "anggota_proses";
						include "anggota_proses.php";
						break;
						case "anggota_search";
						include "anggota_search.php";
						break;
						case "anggota_edit";
						include "anggota_edit.php";
						break;
						case "anggota_proses_edit";
						include "anggota_proses_edit.php";
						break;
						case "anggota_hapus";
						include "anggota_hapus.php";
						break;
						
						
						// transaksi
						case "transaksi";
						include "../transaksi_data.php";
						break;
						case "transaksi_input";
						include "../transaksi_input.php";
						break;
						case "transaksi_proses";
						include "../transaksi_proses.php";
						break;
						case "transaksi_search";
						include "../transaksi_search.php";
						break;
						case "transaksi_proses_kembali";
						include "../transaksi_proses_kembali.php";
						break;
						
						
						
						// laporan
						case "laporan";
						include "../laporan.php";
						break;
						
						// grafik
						case "grafik";
						include "../grafik.php";
						break;
						
						// User
						case "user";
						include "user_data.php";
						break;
						case "user_search";
						include "user_search.php";
						break;
						case "user_input";
						include "user_input.php";
						break;
						case "user_proses";
						include "user_proses.php";
						break;
						case "user_detil";
						include "user_detil.php";
						break;
						case "user_edit";
						include "user_edit.php";
						break;
						case "user_proses_edit";
						include "user_proses_edit.php";
						break;
						case "user_hapus";
						include "user_hapus.php";
						break;
					
					}
			?>

    
</div>
    <!-- menu Merapikan div content -->
    <div class="clear">
   	</div>
    
  	<!-- menu Footer -->
    <div id="footer"><center>&copy; 2018</center></div>
    
</div>

</body>
</html>

<?php } ?>
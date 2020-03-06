<?php
/**
 * Namafile : config.php 
 * ----------------------------*/

$dbhost = 'localhost'; 
$user = 'root';     // ini berlaku di xampp
$pass = '';         // ini berlaku di xampp
$dbname = 'db_perpus';

// melakukan koneksi ke database
$connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($connect->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $connect->connect_error);
}
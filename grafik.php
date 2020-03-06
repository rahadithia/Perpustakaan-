<div id="container" style="margin: 0 auto; padding: 10px;">
	<?php
		// koneksi ke mysql
		mysql_connect("localhost", "root", "");
		mysql_select_db("db_perpus");

		// mencari jumlah Lski-Lski dari database
		$query = "SELECT count(*) AS L FROM tbl_anggota WHERE jk = 'L'";
		$hasil = mysql_query($query);
		$data  = mysql_fetch_array($hasil);
		$L = $data['L'];

		// mencari jumlah Permpuan dari database
		$query = "SELECT count(*) AS P FROM tbl_anggota WHERE jk = 'P'";
		$hasil = mysql_query($query);
		$data  = mysql_fetch_array($hasil);
		$P = $data['P'];

		
		// menghitung total jk
		$total = $L + $P;
		// menghitung prosentase Dosen dan Perempuan
		$prosenL = $L/$total * 100;
		$prosenP = $P/$total * 100;
		

		// menentukan panjang grafik batang berdasarkan prosentase
		$panjangGrafikL = $prosenL * 100 / 100;
		$panjangGrafikP = $prosenP * 100 / 100;
		?>

		<h2>Grafik Statik Anggota</h2>

		<b>Laki-Laki</b> (Jumlah: <?php echo $L; ?> | <?php echo $prosenL; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafikL; ?>%; background-color: blue !important;" title="Laki-Laki (Jumlah: <?php echo $L; ?> | <?php echo $prosenL; ?>%)"></div></p>

		<b>Perempuan</b> (Jumlah: <?php echo $P; ?> | <?php echo $prosenP; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafikP; ?>%; background-color: green;" title="Perempuan (Jumlah: <?php echo $P; ?> | <?php echo $prosenP; ?>%)"></div></p>
</body>
</div>
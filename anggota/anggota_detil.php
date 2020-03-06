    <?php include '../conn/koneksi.php'; ?>
    <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Buku
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Buku Detail</td>
                </tr>
            
            </table>
        	
            
    	</div>
        
   	    <div class="table_input">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
			<?php
            $nim	= isset($_GET['nim']) ? $_GET['nim'] : "";
			$query=mysqli_query($koneksi,"SELECT * FROM tbl_anggota WHERE nim='$nim'");
			$data=mysqli_fetch_array($query);
			?>        
            
            <tbody>
            	<tr>
                	<td width="30%" align="right">NIM</td>
                    <td width="2%">:</td>
                    <td><?php echo $data[0]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $data[1]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo $data[2]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $data[3]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $data[4]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Prodi</td>
                    <td>:</td>
                    <td><?php echo $data[5]; ?></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tahun Masuk</td>
                    <td>:</td>
                    <td><?php echo $data[6]; ?></td>
                </tr>
                <tr>
                    <td><a href="?page=anggota">Kembali</td>
                </tr>
            
            </tbody>
          </table>
 	      </div>
   	  </div>
    </div>

    <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Anggota
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=anggota_search" method="post">
        	<table width="100%" height="100%" style="border:1px solid #9cc;">
            	<tr>
                	<td width="50%"><a href="?page=anggota_input">Input Anggota</a></td>
                    <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="NIM, Nama Anggota"></td>
                    <td><input type="submit" id="submit" value="cari"></td>
                </tr>
            
            </table>
            </form>
            
            
    	</div>
   	    <div class="zebra-table">
   	      <table width="100%" height="100%" align="center" cellspacing="0" cellpadding="5">
   	        <thead align="center">
   	          <tr>
   	            <th align="center" width="5%" >No</th>
   	            <th width="25%">Nim</th>
   	            <th width="20%">Nama</th>
   	            <th width="20%">Prodi</th>
   	            <th width="15%">Thn Masuk</th>
                <th width="8%">Edit</th>
                <th width="8%">Hapus</th>
              </tr>
            </thead>
           <?php
		   		include '../conn/koneksi.php';
		   		$cari = $_POST['cari'];
				$query = "SELECT * FROM tbl_anggota where nim like '%$cari%' OR nama like '%$cari%' ";
				$sql = mysqli_query($koneksi,$query);
				$total = mysqli_num_rows($sql);
				$no = 1;
				
				while ($data=mysqli_fetch_array($sql)) {
			?>
           <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td ><a href="?page=detil-anggota&nim=<?php echo $data['nim']; ?>"class="detil"><?php echo $data['nim']; ?></a></td>
   	            <td ><?php echo $data['nama']; ?></td>
   	            <td align="center"><?php echo $data['prodi']; ?></td>
   	            <td align="center"><?php echo $data['thn_masuk']; ?></td>
                <td align="center"><a href="?page=edit-anggota&nim=<?php echo $data['nim'];?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                <td align="center"><a href="?page=hapus-anggota&nim=<?php echo $data['nim']; ?>" onclick="return confirm('Anda yakin ingin menghapus Anggota <?php echo $data['nama']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
              </tr>
              
            <?php $no++; } ?>
           </tbody>
           
   	      </table>
 	      </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> Anggota</td>
                    
                </tr>
            
            </table>
    	</div>
   	  </div>
    </div>
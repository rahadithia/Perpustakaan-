       			         
       <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Buku
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=buku_search" method="post">
        	<table width="100%" height="100%" style="border:1px solid #9cc;">
            	<tr>
                	<td width="50%"><a href="?page=buku_input">Input Buku</a></td>
                    <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Judul Buku, Pengarang"></td>
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
   	            <th width="30%">Judul Buku</th>
   	            <th width="20%">Pengarang</th>
   	            <th width="15%">Penerbit</th>
   	            <th width="15%">Jumlah</th>
                <th width="8%">Edit</th>
                <th width="8%">Hapus</th>
              </tr>
            </thead>
           <?php
		   		include '../conn/koneksi.php';
		   		$cari = $_POST['cari'];
				$query = "SELECT * FROM tbl_buku where judul like '%$cari%' OR pengarang like '%$cari%' ";
				$sql = mysqli_query($koneksi, $query);
				$total = mysqli_num_rows($sql);
				$no = 1;
				
				while ($data=mysqli_fetch_array($sql)) {
			?>
           <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td><a href="?page=detil-buku&judul=<?php echo $data['judul']; ?>" class="detil"><?php echo $data['judul']; ?></a></td>
   	            <td align="center"><?php echo $data['pengarang']; ?></td>
   	            <td align="center"><?php echo $data['penerbit']; ?></td>
   	            <td align="center"><?php echo $data['jumlah_buku']; ?></td>
                <td align="center"><a href="?page=edit-buku&id=<?php echo $data['id']; ?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                <td align="center"><a href="?page=hapus-buku&id=<?php echo $data['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data buku <?php echo $data['judul']; ?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
                
              </tr>
              
            <?php $no++; } ?> 
           
   	      </table>
 	      </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> buku</td>
                </tr>
            
            </table>
    	</div>
   	  </div>
    </div>
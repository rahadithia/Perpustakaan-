   <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data User
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="" method="post">
        	<table width="100%" height="100%" style="border:1px solid #9cc;">
            	<tr>
                	<td width="50%"><a href="?page=user_input">Input User</a></td>
                    <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Cari nama, username"></td>
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
   	            <th width="30%">Nama</th>
   	            <th width="40%">Email</th>
   	            <th width="15%">Level</th>
                <th width="8%">Edit</th>
                <th width="8%">Hapus</th>
              </tr>
            </thead>
            <?php
				$cari = $_POST['cari'];
				$query = "SELECT * FROM tbl_user WHERE nama like '%$cari%' OR username like '%$cari%' ";
				$sql = mysqli_query($koneksi, $query);
				$total = mysqli_num_rows($sql);
				$no = 1;
				
				while ($data=mysqli_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td align="center"><?php echo $no; ?></td>
   	            <td><a href="?page=user_detil&id=<?=$data['id']?>"><?php echo $data['nama']; ?></a></td>
   	            <td><?php echo $data['email']; ?></td>
   	            <td><?php echo $data['level']; ?></td>
                <td align="center"><a href="?page=user_edit&id=<?=$data['id']?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                <td align="center"><a href="?page=user_hapus&id=<?=$data['id']?>" onclick="return confirm('Anda yakin ingin menghapus data user <?=$data['nama']?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
                
              </tr>
              
            <?php $no++; } ?>
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> User</td>
                    
                </tr>
            </table>
    	</div>
   	  </div>
    </div>
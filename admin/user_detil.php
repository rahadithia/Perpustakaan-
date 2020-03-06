   <?php include '../conn/koneksi.php'; ?>
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Buku
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">User Detail</td>
                </tr>
            
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="" method="post">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
          <?php
            $id	= isset($_GET['id']) ? $_GET['id'] : "";
			$query=mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE id='$id'");
			$data=mysqli_fetch_array($query);
			?>  
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" size="50%" value="<?=$data[1]?>" readonly></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Username</td>
                    <td><input type="text" name="username" size="50%" value="<?=$data[2]?>" readonly></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Email</td>
                    <td><input type="text" name="email" size="50%" value="<?=$data[4]?>" readonly></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Foto</td>
                    <td><img src="../images/<?=$data[5]?>" width="190" height="170"><br>
                </tr>
                <tr>
                	<td width="20%" align="right">Group User</td>
                    <td><input type="text" name="email" size="30%" value="<?=$data[6]?>" readonly></td>
                </tr>
                <tr>
                    <td><a href="?page=user">Kembali</td>
                </tr>
               
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>
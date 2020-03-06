   <?php
   include '../conn/koneksi.php';
   
   $id = $_GET['id'];
   $query = "SELECT * FROM tbl_user WHERE id=$id";
   $sql = mysqli_query($koneksi, $query);
   $data = mysqli_fetch_array($sql);
   $id = $data['id'];
   $nama = $data['nama'];
   $username = $data['username'];
   $password = $data['password'];
   $email = $data['email'];
   $foto = $data['foto'];
   $level = $data['level'];   
   ?>
   
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">user
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Edit User</td>
                </tr>
            
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=user_proses_edit" method="post">
        <input type="hidden" name="id" value="<?=$id?>" />
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" size="50%" value="<?=$nama?>" required></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Username</td>
                    <td><input type="text" name="username" size="50%" value="<?=$username?>" required></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Password</td>
                    <td><input type="password" name="password" size="50%" placeholder="********" required></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Email</td>
                    <td><input type="text" name="email" size="50%" value="<?=$email?>" required></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Foto</td>
                    <td><img src="../images/<?=$foto?>" width="190" height="170"><br>
                    <input type="file" name="foto" value="<?=$foto?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Level</td>
                    <td><select name="level">
                    		<option value="">Pilih User</option>
                            <option value="admin" <?php if($level=='admin'){echo "selected"; } ?>>Administrator</option>
                            <option value="user" <?php if ($level=='user'){echo "selected"; }?>>User</option>                    
                    	   <option value="operator" <?php if ($level=='operator'){echo "selected"; }?>>operator</option>
						   <option value="pimpinan" <?php if ($level=='pimpinan'){echo "selected"; }?>>pimpinan</option>
						</select>
                    </td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
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
   <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">user
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
        <form action="?page=user_proses" method="post">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Username</td>
                    <td><input type="text" name="username" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Password</td>
                    <td><input type="text" name="password" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Email</td>
                    <td><input type="email" name="email" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Foto</td>
                    <td><img src="" width="190" height="170"><br>
                    <input type="file" name="foto"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Group User</td>
                    <td><select name="level">
                    		<option>Pilih User</option>
                            <option value="admin">Administrator</option>
                            <option value="user">User</option>                    
							<option value="operator">operator</option>
							<option value="pimpinan">pimpinan</option>
						</select>
                    </td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=user">Kembali</a></td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>
    
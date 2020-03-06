
<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Anggota
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Input Anggota</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=anggota_proses" method="post">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">NIM</td>
                    <td><input type="text" name="nim" size="50%"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" size="50%"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" size="50%"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Lahir</td>
                    <td><input type="date" name="tgl_lahir"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jenis Kelamin</td>
                    <td>
                    <input type="radio" name="jk" value="L"/>Laki-laki
   					<input type="radio" name="jk" value="P"/>Perempuan
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Prodi</td>
                    <td><select name="prodi">
                    		<option>Pilih Prodi</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Komputer Akuntansi">Komputer Akuntansi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
							<option value="Ekonomi Bisnis">Ekonomi Bisnis</option>
							<option value="Agribisnis">Agribisnis</option>
							<option value="Fisika">Fisika</option>
							<option value="Kimia">Kimia</option>
                    	</select>
                    </td>
                </tr>               
                <tr>
                	<td width="20%" align="right">Tahun Masuk</td>
                    <td><input type="text" name="thn_masuk" size="50%"></td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=anggota">Kembali</td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>
<?php 
include '../conn/koneksi.php';
$nim = $_GET['nim'];
$query = "SELECT * FROM tbl_anggota where nim='$nim'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$nim = $data['nim'];
$nama = $data['nama'];
$tempat = $data['tempat_lahir'];
$tgl_lahir = $data['tgl_lahir'];
$jk = $data['jk'];
$prodi = $data['prodi'];
$thn = $data['thn_masuk'];

?>
<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Anggota
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Edit Anggota</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=anggota_proses_edit" method="post">
          <input type="hidden" name="nim" size="50%" value="<?php echo $nim; ?>"></td>
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">NIM</td>
                    <td><input type="text" name="nim1" size="50%" value="<?php echo $nim; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Nama Lengkap</td>
                    <td><input type="text" name="nama" size="50%" value="<?php echo $nama; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" size="50%" value="<?php echo $tempat; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tanggal Lahir</td>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jenis Kelamin</td>
                    <td><?php if ($data['jk'] === "L") : ?>
                    <input type="radio" name="jk" value="L" checked />Laki-Laki</label>
            		<input type="radio" name="jk" value="P" />Perempuan</label>
                    <?php else : ?>
            		<input type="radio" name="jk" value="L" />Laki-Laki</label>
            		<input type="radio" name="jk" value="P" checked />Perempuan</label>
            		<?php endif; ?>
                    	</select>
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Prodi</td>
                    <td><select name="prodi">
                    		<option>Pilih Prodi</option>
                            <option value="Sistem Informasi" <?php if ($prodi=='Sistem Informasi') {echo "selected";} ?>>Sistem Informasi</option>
                            <option value="Komputer Akuntansi"  <?php if ($prodi=='Komputer Akuntansi') {echo "selected";} ?>>Komputer Akuntansi</option>
                            <option value="Teknik Informatika" <?php if ($prodi=='Teknik Informatika') {echo "selected";} ?>>Teknik Informatika</option>
							<option value="Ekonomi Bisnis"  <?php if ($prodi=='Ekonomi Bisnis') {echo "selected";} ?>>Ekonomi Bisnis</option>
							<option value="Agribisnis"  <?php if ($prodi=='Agribisnis') {echo "selected";} ?>>Agribisnis</option>
							<option value="Fisika"  <?php if ($prodi=='Fisika') {echo "selected";} ?>>Fisika</option>
							<option value="Kimia"  <?php if ($prodi=='Kimia') {echo "selected";} ?>>Kimia</option>
                    	</select>
                    </td>
                </tr>               
                <tr>
                	<td width="20%" align="right">Tahun Masuk</td>
                    <td><input type="text" name="thn_masuk" size="50%" value="<?php echo $thn; ?>"></td>
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
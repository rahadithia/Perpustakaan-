<?php 
	include '../conn/koneksi.php';
	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;
	
	$id		= $_GET['id'];
	
	$query = "SELECT * FROM tbl_buku WHERE id=$id";
	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);
	$id = $data['id'];
	$judul = $data['judul'];
	$pengarang = $data['pengarang'];
	$penerbit = $data['penerbit'];
	$thn_terbit = $data['thn_terbit'];
	$isbn = $data['isbn'];
	$jumlah = $data['jumlah_buku'];
	$lokasi = $data['lokasi'];
?>

<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Buku
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Edit Buku</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=buku_proses_edit" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="hidden" name="tgl_input" value="<?php echo $tgl_input; ?>"  />
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">Judul Buku</td>
                    <td><input type="text" name="judul" size="50%" value="<?=$judul ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Pengarang</td>
                    <td><input type="text" name="pengarang" size="50%" value="<?=$pengarang ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Penerbit</td>
                    <td><input type="text" name="penerbit" size="50%" value="<?=$penerbit ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tahun Terbit</td>
                    <td><select name="thn_terbit">
                    		<option value="">Pilih Tahun</option>
							<option value="2018" <?php if( $thn_terbit=='2018'){echo "selected"; } ?>>2018</option>
							<option value="2017" <?php if( $thn_terbit=='2017'){echo "selected"; } ?>>2017</option>
							<option value="2016" <?php if( $thn_terbit=='2016'){echo "selected"; } ?>>2016</option>
                            <option value="2015" <?php if( $thn_terbit=='2015'){echo "selected"; } ?>>2015</option>
                            <option value="2014" <?php if( $thn_terbit=='2014'){echo "selected"; } ?>>2014</option>
                            <option value="2013" <?php if( $thn_terbit=='2013'){echo "selected"; } ?>>2013</option>
                            <option value="2012" <?php if( $thn_terbit=='2012'){echo "selected"; } ?>>2012</option>
                            <option value="2011" <?php if( $thn_terbit=='2011'){echo "selected"; } ?>>2011</option>
                            <option value="2010" <?php if( $thn_terbit=='2010'){echo "selected"; } ?>>2010</option>
                            <option value="2009" <?php if( $thn_terbit=='2009'){echo "selected"; } ?>>2009</option>
                            <option value="2008" <?php if( $thn_terbit=='2008'){echo "selected"; } ?>>2008</option>
                            <option value="2007" <?php if( $thn_terbit=='2007'){echo "selected"; } ?>>2007</option>
                            <option value="2006" <?php if( $thn_terbit=='2006'){echo "selected"; } ?>>2006</option>
                            <option value="2005" <?php if( $thn_terbit=='2005'){echo "selected"; } ?>>2005</option>
                            <option value="2004" <?php if( $thn_terbit=='2004'){echo "selected"; } ?>>2004</option>
                            <option value="2003" <?php if( $thn_terbit=='2003'){echo "selected"; } ?>>2003</option>
                            <option value="2002" <?php if( $thn_terbit=='2002'){echo "selected"; } ?>>2002</option>
                            <option value="2001" <?php if( $thn_terbit=='2001'){echo "selected"; } ?>>2001</option>
                            <option value="2000" <?php if( $thn_terbit=='2000'){echo "selected"; } ?>>2000</option>
                            <option value="2010" <?php if( $thn_terbit=='1999'){echo "selected"; } ?>>1999</option>
                            <option value="2009" <?php if( $thn_terbit=='1998'){echo "selected"; } ?>>1998</option>
                            <option value="2008" <?php if( $thn_terbit=='1997'){echo "selected"; } ?>>1997</option>
                            <option value="2007" <?php if( $thn_terbit=='1996'){echo "selected"; } ?>>1996</option>
                            <option value="2006" <?php if( $thn_terbit=='1995'){echo "selected"; } ?>>1995</option>
                            <option value="2005" <?php if( $thn_terbit=='1994'){echo "selected"; } ?>>1994</option>
                            <option value="2004" <?php if( $thn_terbit=='1993'){echo "selected"; } ?>>1993</option>
                            <option value="2003" <?php if( $thn_terbit=='1992'){echo "selected"; } ?>>1992</option>
                            <option value="2002" <?php if( $thn_terbit=='1991'){echo "selected"; } ?>>1991</option>
                            <option value="2001" <?php if( $thn_terbit=='1990'){echo "selected"; } ?>>1990</option>
                            <option value="2000" <?php if( $thn_terbit=='2015'){echo "selected"; } ?>>2000</option>
						</select>
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Kode ISBN</td>
                    <td><input type="text" name="isbn" size="50%" value="<?=$isbn ?>"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jumlah</td>
                    <td><input type="text" name="jumlah_buku" size="50%" value="<?=$jumlah ?>"></td>
                </tr>               
                <tr>
                	<td width="20%" align="right">Lokasi</td>
                    <td><select name="lokasi">
                    		<option>Pilih Lokasi</option>
                            <option value="rak1" <?php if( $lokasi=='rak1'){echo "selected"; } ?>>Rak 1</option>
                            <option value="rak2" <?php if( $lokasi=='rak2'){echo "selected"; } ?>>Rak 2</option> 
                            <option value="rak3" <?php if( $lokasi=='rak3'){echo "selected"; } ?>>Rak 3</option>
							<option value="rak4" <?php if( $lokasi=='rak4'){echo "selected"; } ?>>Rak 4</option>
							<option value="rak5" <?php if( $lokasi=='rak5'){echo "selected"; } ?>>Rak 5</option>
							<option value="rak6" <?php if( $lokasi=='rak6'){echo "selected"; } ?>>Rak 6</option>
							<option value="rak7" <?php if( $lokasi=='rak7'){echo "selected"; } ?>>Rak 7</option>
							<option value="rak8" <?php if( $lokasi=='rak8'){echo "selected"; } ?>>Rak 8</option>
							<option value="rak9" <?php if( $lokasi=='rak9'){echo "selected"; } ?>>Rak 9</option>
							<option value="rak10" <?php if( $lokasi=='rak10'){echo "selected"; }?>>Rak 10</option>
                    	</select>
                    </td>
                    </td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=buku">Batal
                    </a></td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>
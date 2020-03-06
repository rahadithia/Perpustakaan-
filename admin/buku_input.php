<?php 
	include 'conn/koneksi.php';
	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;
?>

<!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Data Buku
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<table width="100%" height="100%" style="background-color:#9cc;">
            	<tr>
                	<td align="center">Input Buku</td>
                </tr>
            </table>
            
    	</div>
   	    <div class="table_input">
        <form action="?page=buku_proses" method="post">
        <input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
   	      <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
   	        <tbody>
            	<tr>
                	<td width="25%" align="right">Judul Buku</td>
                    <td><input type="text" name="judul" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Pengarang</td>
                    <td><input type="text" name="pengarang" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Penerbit</td>
                    <td><input type="text" name="penerbit" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Tahun Terbit</td>
                    <td><select name="thn_terbit">
                    		<option value="">Pilih Tahun</option>
							<option value="2018">2018</option>
							<option value="2017">2017</option>
							<option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
						</select>
                    </td>
                </tr>
                <tr>
                	<td width="20%" align="right">Kode ISBN</td>
                    <td><input type="text" name="isbn" size="50%" required="required"></td>
                </tr>
                <tr>
                	<td width="20%" align="right">Jumlah</td>
                    <td><input type="text" name="jumlah_buku" size="50%" required="required"></td>
                </tr>               
                <tr>
                	<td width="20%" align="right">Lokasi</td>
                    <td><select name="lokasi">
                    		<option value="">Pilih Lokasi</option>
                            <option value="rak1">Rak 1</option>
                            <option value="rak2">Rak 2</option> 
                            <option value="rak3">Rak 3</option> 
							<option value="rak4">Rak 4</option>
							<option value="rak5">Rak 5</option>
							<option value="rak6">Rak 6</option>
							<option value="rak7">Rak 7</option>
							<option value="rak8">Rak 8</option> 
							<option value="rak9">Rak 9</option>
							<option value="rak10">Rak 10</option>       
                    	</select>
                    </td>
                </tr>
                <tr>
                	<td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
                <tr>
                    <td><a href="?page=buku">Kembali</td>
                </tr>
            
            </tbody>
          </table>
          </form>
 	      </div>
   	  </div>
    </div>
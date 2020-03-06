    <style type="text/css">
	.lap {
		text-decoration:none;
	}
	.table_input a:hover {
		color:#0FF;
	}
	</style>
	
	<?php include '../conn/koneksi.php'; ?>
    <!-- menu tengah -->
	<div id="menu-tengah">
    	<div id="bg_menu">Laporan
    	</div>
    	<div id="content_menu">
			<div id="menu_header">
				<table width="100%" height="100%" style="background-color:#9cc;">
				</table>
			</div>
        
			<div class="table_input">
			  <table width="100%" height="80%" align="center" cellspacing="0" cellpadding="5">
				<body>
					
					<tr>
						<td width="30%"><a href="print-peminjaman.php" class="lap" target="_blank">1. Laporan Peminjaman</a></td>
					</tr>
					<tr>
					<td width="30%"><a href="../print-buku.php" class="lap" target="_blank">2. Laporan Buku</a></td>
					</tr>
				</tbody>
			  </table>
			</div>
		</div>
    </div>

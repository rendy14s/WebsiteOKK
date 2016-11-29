<?php
	include "../../Koneksi_Php/koneksi.php";

	$sql = "SELECT username, atas_nama, no_rek, tgl_transfer, jml_transfer From konfirmasi";
	$result = mysql_query($sql);

	while ($show = mysql_fetch_array($result)){

			$username     = $show['username'];
			$atas_nama    = $show['atas_nama'];
			$no_rek       = $show['no_rek'];
			$tgl_transfer = $show['tgl_transfer'];
			$jml_transfer = $show['jml_transfer'];  

?>
<table border="1" align="center">
	<tr>
	<td>Username</td>
	<td>Atas Nama</td>
	<td>No Rekening</td>
	<td>Tanggal Transfer</td>
	<td>Jumlah Transfer</td>
	</tr>

<?php 
			echo "<td>";
			echo $username;
			echo "</td>";

            echo "<td>";
            echo $atas_nama;
			echo "</td>";

            echo "<td>";
            echo $no_rek;
			echo "</td>";

            echo "<td>";
            echo $tgl_transfer;
            echo "</td>";

			echo "<td>";
            echo $jml_transfer;
            echo "</td>";

            echo "</tr>";
	}



?>
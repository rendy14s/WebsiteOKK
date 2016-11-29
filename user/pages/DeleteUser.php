<?php
$username	= $_GET['username'];

include "../../Koneksi_Php/koneksi.php";

	$sql = "DELETE From user WHERE username = '$username';";
	$result = mysql_query($sql);


	if($result){

		echo '<script language="javascript">window.location = "daftar-user.php"</script>';
	}
			else{

				echo "Gagal delete";
				echo mysql_error();
			}

?>
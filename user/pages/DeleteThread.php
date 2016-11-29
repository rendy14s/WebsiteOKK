<?php
$id	= $_GET['post_id'];

include "../../Koneksi_Php/koneksi.php";

	$sql = "DELETE FROM `post` WHERE `post_id`= '$id';";
	$result = mysql_query($sql);


	if($result){

		echo '<script language="javascript">window.location = "daftar-thread.php"</script>';
	}
			else{
				echo "Gagal delete";
			}

?>
<?php
/**
 * Created by PhpStorm.
 * User: RENDY'S
 * Date: 19/12/2014
 * Time: 12:39
 */
include "../../Koneksi_Php/koneksi.php";


	$sql 	= "DELETE FROM jadwal;";
	$result = mysql_query($sql);


	if($result){

		echo '<script language="javascript">window.location = "CreateJadwal.php"</script>';
                        
	}
		else{
			echo "gagal delete jadwal";
		}
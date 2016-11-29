<?php
session_start();
include "../Koneksi_Php/koneksi.php";


                date_default_timezone_set('Asia/Jakarta');
                    $waktu = date("h:i:s A");
                    $tanggal = date("Y/m/d");

 
    $user 		= $_SESSION['username'];
	$id 		= $_SESSION['id'];
    $posting 	= $_POST['editor1'];


    $sql = "INSERT INTO komentar VALUES('$id','$user','$waktu','$tanggal','$posting');";
    $result = mysql_query($sql);

    if($result){

    echo "<script language='javascript'>window.location = 'View-Posting.php?post_id=".$id."'</script>";
}
    else{
    	echo "GAGAL KOMENTAR";
    
    }

?>



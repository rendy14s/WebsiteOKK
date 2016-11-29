<?php
session_start();
include "../../Koneksi_Php/koneksi.php";




    
	$user = $_SESSION['username'];
    $kode_acara = $_POST['kode'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jumlah = $_POST['jumlah'];
    $norek= $_POST['norek'];




 $insert ="insert into konfirmasi 	values('$user','$nama','$norek','$tanggal','$jumlah','$kode_acara', '0');";
                    $insert_konfirmasi = mysql_query($insert);



                if ($insert_konfirmasi){
				

                  echo '<script language="javascript">window.location = "daftaracara.php"</script>';
                }
                    else {
                       echo  mysql_error();
                         echo "gagal insert";
                    }
?>

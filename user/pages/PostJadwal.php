<?php
/**
 * Created by PhpStorm.
 * User: RENDY'S
 * Date: 19/12/2014
 * Time: 12:39
 */
include "../../Koneksi_Php/koneksi.php";

   
    $home         = $_POST['home'];
    $away         = $_POST['away'];
    $hari         = $_POST['hari'];
    $tanggal      = $_POST['tanggal'];
    $harga1       = $_POST['harga1'];
    $harga2       = $_POST['harga2'];
    $harga3       = $_POST['harga3'];
    $harga4       = $_POST['harga4'];
	
	   
        //--------------------------------- HOME --------------------------

        if($home == '1'){
            $home = "Madura UTD";
        }
        else if($home == '2'){
            $home = "Gresik United";
        }
          else if($home == '3'){
            $home = "Persela";
        }
          else if($home == '4'){
            $home = "Persebaya";
        }
          else if($home =='5'){
            $home = "Persib";
        }
          else if($home == '6'){
            $home = "Arema";
        }
          else if($home == '7'){
            $home = "Bali United";
        }
          else if($home == '8'){
            $home = "PSM";
        }
          else if($home == '9'){
            $home = "Semen Padang";
        }
          else if($home == '10'){
            $home = "Sriwijaya";
        }
          else if($home == '11'){
            $home = "PS TNI";
        }
          else if($home == '12'){
            $home = "Persipura";
        }
          else if($home == '13'){
            $home = "Bartio Putera";
        }
          else if($home == '14'){
            $home = "Mitra Kukar";
        }
          else if($home == '15'){
            $home = "PBFC";
        }
          else if($home == '16'){
            $home = "Persiba";
        }
          else if($home == '17'){
            $home = "Persija";
        }



        //------------------------ Away --------------------------
       if($away == '1'){
            $away = "Madura UTD";
        }
        else if($away == 2){
            $away = "Gresik United";
        }
          else if($away == '3'){
            $away = "Persela";
        }
          else if($away == '4'){
            $away = "Persebaya";
        }
          else if($away == '5'){
            $away = "Persib";
        }
          else if($away == '6'){
            $away = "Arema";
        }
          else if($away == '7'){
            $away = "Bali United";
        }
          else if($away == '8'){
            $away = "PSM";
        }
          else if($away == '9'){
            $away = "Semen Padang";
        }
          else if($away == '10'){
            $away = "Sriwijaya";
        }
          else if($away == '11'){
            $away = "PS TNI";
        }
          else if($away == '12'){
            $away = "Persipura";
        }
          else if($away == '13'){
            $away = "Barito Putera";
        }
          else if($away == '14'){
            $away = "Mitra Kukar";
        }
          else if($away == '15'){
            $away = "PBFC";
        }
          else if($away == '16'){
            $away = "Persiba";
        }
          else if($away == '17'){
            $away = "Persija";
        }
                      
       $insert = "insert into jadwal values ('','$hari','$tanggal','$home','$away','$harga1','$harga2','$harga3','$harga4','','');";
						
        $posting = mysql_query($insert);

                      if ($posting) {
                           // echo "Sukses buat thread";
                        echo '<script language="javascript">window.location = "Jadwal.php"</script>';

                       // echo '<script language="javascript">alert("Jenis Gambar salah, Gambar Harus .jpg .gif .png")</script>';
                        } 
                        else {
                            echo $waktu;
                                die(mysql_error());
                            echo "gagal buat jadwal";
                        }
					 



?>



<?php
/**
 * Created by PhpStorm.
 * User: RENDY'S
 * Date: 19/12/2014
 * Time: 12:39
 */
include "../../Koneksi_Php/koneksi.php";

    $namafolder="img-upload/";
	

    $posting      = $_POST['editor1'];
	$jenis_gambar = $_FILES['nama_file']['type']; 
    $judul_gambar = $_POST['judul_gambar'];


			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
                {

                    $gambar = $namafolder . basename($_FILES['nama_file']['name']);
                    if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
                       // echo "Gambar berhasil dikirim " . $gambar;

                      
                        $sql_row    = "SELECT * FROM jadwal";
                        $result_row = mysql_query($sql_row);
                        $no         = mysql_num_rows($result_row);

                      
                        $insert = "insert into jadwal values ('$posting','','','','','','','','','$judul_gambar','$gambar');";
						$posting = mysql_query($insert);

                             if ($posting) {
                           // echo "Sukses buat thread";
                        echo '<script language="javascript">window.location = "Jadwal.php"</script>';
                        } 
                        else {
                            echo $waktu;
                                die(mysql_error());
                            echo "gagal buat jadwal";
                        }


                   }
                
                  else{
                        echo "gagal pindah";
                       }
               }    
                else
                {
					//die(mysql_error());
                    echo '<script language="javascript">alert("Jenis Gambar salah, Gambar Harus .jpg .gif .png")</script>';
                //    echo '<script language="javascript">window.location = "CreateJadwal.php"</script>';    
					}



?>
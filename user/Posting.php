<?php
/**
 * Created by PhpStorm.
 * User: RENDY'S
 * Date: 19/12/2014
 * Time: 12:39
 */

include "../Koneksi_Php/koneksi.php";
session_start();

$username = $_SESSION['username'];

$namafolder="img-upload/";
	
	
    $judul = $_POST['judul'];
    $posting = $_POST['editor1'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
	
	
	//$date = date('Y-m-d',strtotime($_POST['tanggal']));
	

	
	$jenis_gambar = $_FILES['nama_file']['type'];     
	$judul_gambar = $_POST['judul_gambar'];
	
    $select = "select * from post";
    $bar    = mysql_query($select);
    $count_row_post = mysql_num_rows($bar);
    $count_row_post++;

           
				
			
			if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
                {
                    $gambar = $namafolder . basename($_FILES['nama_file']['name']);
                    if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
                        //echo "Gambar berhasil dikirim " . $gambar;
                        $insert = "insert into post (post_id,post_user,post_judul,post_body,waktu,tanggal,judul_gambar,nama_file)
  values ('$count_row_post','$username','$judul','$posting','$waktu','$tanggal','$judul_gambar','$gambar');";
							$posting = mysql_query($insert);

						
					   
					   }
                    if ($posting) {
                            //echo "Sukses buat thread";
                        echo '<script language="javascript">window.location = "../User-Account/pages/indexuserhomepage.php"</script>';
                        } 
						else {

                            echo "gagal buat thread";
                           die(mysql_error());
                        }
               }     
                else
                {
					die(mysql_error());
                    echo '<script language="javascript">alert("Jenis Gambar salah, Gambar Harus .jpg .gif .png")</script>';
                    echo '<script language="javascript">window.location = "post.php"</script>';    
					}



?>
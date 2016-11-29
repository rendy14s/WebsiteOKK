<?php
/**
 * Created by PhpStorm.
 * User: RENDY'S
 * Date: 19/12/2014
 * Time: 12:53
 */

$server = "localhost";
$user   = "root";
$pass   = "";
$db     = "persija";

$conn = mysql_connect($server,$user,$pass);
$select = mysql_select_db($db,$conn);

if ($select){
  //  echo "koneksi berhasil";
}
else {
    // echo "koneksi gagal";
}

?>
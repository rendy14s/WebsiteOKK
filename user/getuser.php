<?php 
session_start();
include "../Koneksi_Php/koneksi.php";

 $q = ($_GET['tanggal']);

$sql="SELECT * FROM jadwal WHERE tanggal = '".$q."'";
$result = mysql_query($sql);
$row   = mysql_num_rows($result);
$row = mysql_fetch_array($result);

$home         = $row ['home'];
$away         = $row ['away'];
$harga_1      = $row ['harga_1'];
$harga_2      = $row ['harga_2'];
$harga_3      = $row ['harga_3'];
$harga_4      = $row ['harga_4'];


            echo '<label for="inputName3" class="col-sm-6 control-label">Pertandingan :</label>';
            echo '<input type="text" class="form-control" id="inputName3" name="pertandingan" value="'.$home .  ' VS ' . $away. '" readonly>';
            echo "<br>";
            echo '<label for="inputName3" class="col-sm-6 control-label">Harga Tiket Kategori 1 :</label>';
            echo '<input type="text" class="form-control" id="inputName3" name="harga1" value="'.$harga_1.'" readonly>';
            echo "<br>";
            echo '<label for="inputName3" class="col-sm-6 control-label">Harga Tiket Kategori 2 :</label>';
            echo '<input type="text" class="form-control" id="inputName3" name="harga2" value="'.$harga_2.'" readonly>';
            echo "<br>";
            echo '<label for="inputName3" class="col-sm-6 control-label">Harga Tiket VIP Timur:</label>';
            echo '<input type="text" class="form-control" id="inputName3" name="harga3" value="'.$harga_3.'" readonly>';
            echo "<br>";
            echo '<label for="inputName3" class="col-sm-6 control-label">Harga Tiket VIP Barat (VVIP) :</label>';
            echo '<input type="text" class="form-control" id="inputName3" name="harga4" value="'.$harga_4.'" readonly>';
            
            echo "<br>";
            echo '<label for="inputName3" class="col-sm-6 control-label">Jumlah Tiket:</label>';
            echo '<input  type="text" class="form-control" id="inputName3" name="jumlah">';

            echo "<br>";
            echo '<label for="inputName3" class="col-sm-6 control-label">Tribun :</label>';
            echo '<input type="radio" name="tribun" value="1"> Kategori 1 ';
            echo '<input type="radio" name="tribun" value="2"> Kategori 2 ';
            echo '<input type="radio" name="tribun" value="3"> VIP Timur ';
            echo '<input type="radio" name="tribun" value="4"> Vip Barat (VVIP) ';

            echo "</p>";
            echo "<br>";

            echo "<center>";
            echo'<input type="submit" Value="ORDER" />';
  
            echo "</center>";

            $_SESSION['home'] = $home;
            $_SESSION['away'] = $away;
?>
<br>
</form>
</tbody>
</table>

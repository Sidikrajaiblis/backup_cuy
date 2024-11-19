<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toko ayam</title>
</head>
<body bgcolor="skyblue">
<font face="arial">
<table width="100%" border="0">
     <tr align="center">
     <td colspan="3"><h2>TOKO AYAM GORENG</h2></td>
     </tr>
     <tr>
       <td>1.AYAM SAJA</td>
       <td>2.PAKET</td>
       <td>3.TAMBAHAN</td>
     </tr>
     <tr>
        <td> Dada : 15.000</td>
        <td> (Nasi,Dada/Paha) : 18.000</td>
        <td> nasi : 5.000 </td>
     </tr>
     <tr>
         <td>Paha : 15.000 </td>
         <td>(Nasi,Dada/Paha,Air Mineral) : 21.000 </td>
         <td>Ati Ampela : 5.000</td>
     </tr>
     <tr>
         <td></td>
         <td></td>
         <td> Air Mineral : 3.000</td>
     </tr>
     <tr>
         <td></td>
         <td></td>
         <td>Lalapan : 3.000</td>
     </tr> 
     <tr>
        <td colspan="3">4.BELANJA LEBIH DARI 100K BONUS ATI AMPELA</td>
     </tr>
     <tr>
        <td colspan="3">5.BELANJA LEBIH DARI 150K BONUS ATI AMPELA & AIR MINERAL</td>
     </tr>
     <tr>
     <td>
      <br><br><br>
     </td>
     </tr>
     <tr>
     <td align="center" colspan="3" style='color:red'>Harap Di Isi Dengan Benar</td>
     </tr>
</table>

<hr size="5" color="black">

<table border="0" width="100%">
<tr>
<td align="center">
<?php
        if(isset($_GET['nama'])){
            if($_GET['nama'] == "kosong"){
                echo "<h4 style='color:red'>Menu Belum Di Masukan !</h4>";
            }
        }
    ?>

<h4>Masukan pesanan anda</h4>
<form action="lat4.2.php" method="post">
  <table>
     <tr>
        <td>Menu</td>
        <td><input type="text" name="nama"></td>
        <td><input type="submit" values="cek"></td>
     </tr>
  </table>
</form>
</td>
</tr>
</table>
</font>
</body>
</html>
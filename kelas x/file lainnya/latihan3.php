<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$asep[1] = "Nama dosen: Asep<br> nama siswa: epul <br>kelas: RPL <br> mtk dan b.inggris <br> hobi: lari dan renang <br><br>";
 $asep[2] = "Nama dosen: Asep<br> nama siswa: ucup <br>kelas: RPL <br>java scrip data base dan b.indo <br> hobi: lari dan renang <br><br>";
 $asep[0] = "Nama dosen: Asep <br> nama siswa: aep <br>kelas:  RPL <br>php b.sunda  dan ipa <br> hobi: lari dan renang <br><br>";

$cecep[1] = "Nama dosen: Cecep<br> nama siswa: usep <br>kelas: tkro <br>mtk pai dan pnjas <br> hobi: lari dan main game <br><br>";
 $cecep[2] = "Nama dosen: Cecep<br> nama siswa: agung <br>kelas: tkro <br>fisika ppkn dan keassalaamman <br> hobi: rebahan dan perang<br><br>";
 $cecep[0] = "Nama dosen: Cecep<br> nama siswa: endang <br>kelas: tkro <br>kimia ipas dan senbud <br> hobi: lompat tinggi dan balapan <br><br>";



    foreach ($asep as $val) {
     echo "$val";
   } echo "<br>";
  
    foreach ($cecep as $val) {
     echo "$val";
   } echo "<br>";

?>

</body>
</html>
<?php

$nama ="Dudi Similikiti";
$kelas ="XI RPL 1";

$indo = 80;
$inggris = 70;
$mtk = 80;
$produktif = 90;

$total = $indo + $inggris + $mtk + $produktif;
$rata = $total / 4;

echo"<table>";
echo"<tr><td>Nama : $nama </td></tr>";
echo"<tr><td>Kelas : $kelas </td></tr>";
echo"<tr><td>Nilai B.Indonesia </td><td> : $indo </td></tr>";
echo"<tr><td>Nilai B.Inggris </td><td> : $inggris </td></tr>";
echo"<tr><td>Matematika </td><td> : $mtk </td></tr>";
echo"<tr><td>Produktif </td><td> : $produktif </td></tr>";
echo"<tr><td>Rata-rata </td><td> : $rata </td></tr>";
echo"</table> <br>";

echo"<b>--------------------------------------</b> <br>";
echo"Status : ";
if ($rata > 75) {
    echo"*Anda Lulus*";
}else{
    echo"*Anda Tidak Lulus*";
}

?>
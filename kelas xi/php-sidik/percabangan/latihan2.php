<?php

$nama ="sidik";
$jenis_kelamin ="Laki-laki";
$jenis ="Makanan";
$menu ="Ayam Goreng";
$jumlah = 3;

echo"<table> ";

echo"<tr><td colspan='2'><b>Restoran Paling Sigma<b/></td></tr>";

echo"<tr><td colspan='2'>------------------------------------</td></tr>";

echo"<tr><td> Nama </td><td> : $nama </td></tr>";
echo"<tr><td> Jenis Kelamin </td><td> : $jenis_kelamin </td></tr>";
echo"<tr><td> Jenis </td><td> : $jenis </td></tr>";
echo"<tr><td> Menu </td><td> : $menu </td></tr>";

if ($jenis == "Makanan") {
    if ($menu == "Nasi Goreng") {
        $harga = 10000;
        echo"<tr><td> Harga </td><td> : $harga </td></tr>";
    }else if ($menu == "Mie Goreng") {
        $harga = 15000;
        echo"<tr><td> Harga </td><td> : $harga </td></tr>";
    }else if ($menu == "Ayam Goreng") {
        $harga = 20000;
        echo"<tr><td> Harga </td><td> : $harga </td></tr>";
    }
}else if ($jenis == "Minuman") {
    if ($menu == "Air Mineral") {
        $harga = 5000;
        echo"<tr><td> Harga </td><td> : $harga </td></tr>";
    }else if ($menu == "Freash Tea") {
        $harga = 7000;
        echo"<tr><td> Harga </td><td> : $harga </td></tr>";
    }else if ($menu == "Jus") {
        $harga = 12000;
        echo"<tr><td> Harga </td><td> : $harga </td></tr>";
    }
}


echo"<tr><td colspan='2'>------------------------------------</td></tr>";
echo"<tr><td> Jumlah </td><td> : $jumlah </td></tr>";

$total = $harga * $jumlah;
echo"<tr><td> Total </td><td> : $total </td></tr>";

if ($total > 50000) {
    $diskon = $total * 0.2;
    $totalbayar = $total - $diskon;
    echo"<tr><td> Diskon 20% </td><td> : $diskon </td></tr>";
}else {
    $totalbayar = $total;
    echo"<tr><td colspan='2'> Tidak Mendapatkan Diskon </td></tr>";
}

echo"<tr><td colspan='2'>------------------------------------</td></tr>";
echo"<tr><td> Total Bayar </td><td> : $totalbayar </td></tr>";

echo"</table>";

?>
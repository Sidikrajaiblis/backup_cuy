<?php

//ayam
$dada = 15000;
$paha = 15000;

//paket
$paket1 = 18000;
$paket2 = 21000;

//tambahan
$nasi = 5000;
$ati = 5000;
$air = 3000;
$lalapan = 3000;

$makanan = $_GET['makanan'];
$jumlah = $_GET['jumlah'];
$tambahan = $_GET['tambahan'];

if ($makanan == "") {
    header("location:lat4.php?nama=kosong")
} elseif ($makanan == "dada") {
    echo "anda memesan dada dngan harga : $dada\n";
}
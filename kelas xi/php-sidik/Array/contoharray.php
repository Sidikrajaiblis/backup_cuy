<?php

// membuat array kosong
$buah = array();
$hobi = [];

// membuat array sekaligus mengisinya
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// membuat array dengan mengisi indeks tertentu
$anggota[1] = "Dian";
$anggota[2] = "Muhar";
$anggota[0] = "Petani Kode";

// menampilkan isi array
echo $minuman[0]."<br>";
echo $makanan[1]."<br>";
echo $anggota[2]."<br>";

echo"<hr>";

// ini adalah array dua dimensi
$matrik = [
    [2,3,4],
    [7,5,0],
    [4,3,8],
];

// cara mengakses isinya
echo $matrik[1][0]; 
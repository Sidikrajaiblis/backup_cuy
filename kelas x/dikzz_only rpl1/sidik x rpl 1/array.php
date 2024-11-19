<?php

//membuat array kosong
$buah = array();
$hobi = [];

//membuat array sekaligus mengisinya
$minuman = array("kopi", "Teh", "jus jeruk");
$makanan = ["nasi goreng", "soto", "bubur"];

//membuat array dngan mengisi indeks tetentu
$anggota[1] = "pak ute";
$anggota[2] = "faza";
$anggota[0] = "nabila";

echo $makanan[0];

for ($i=0; $i < count($makanan) ; $i++) { 
    echo $makanan[$i]."<br>"
}
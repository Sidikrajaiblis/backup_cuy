<?php
//fungsi parameter
//nilai yang bisa dimasukan kedalam fungsi / sebuah nilai yang bisa ditentukan 

function luassegitiga($a,$b)
{
    $alas = $a;
    $tinggi = $b;
    $luas = ($alas * $tinggi) / 2;
    return $luas;
}

echo "luas segitiga : " . luassegitiga(10, 8);
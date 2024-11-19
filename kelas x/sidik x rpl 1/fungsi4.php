<?php
//fungsi di dalam fungsi 
function hitungUmur($thnlahir, $thnsekarang)
{
    $umur = $thnsekarang - $thnlahir;
    return $umur;
}

function perkenalan($nama, $salam = "assalamualaikum") 
{
    echo $salam . ", ";
    echo "perkenalkan, nama saya " . $nama . "<br/>";
    //memanggil fungsi lain
    echo "saya berusia " . hitungUmur(2008, 2023) . "tahun<br/>";
    echo "senang berkenalan dengan anda<br/>";
}

//memanggilfungsi perkenalan
perkenalan("sidik");
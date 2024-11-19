<?php

class mobil
{
    public $warna = "merah";
    public $brand = "yamaha";

    public function berjalan(){
        echo "mobil ini bisa berjalan";
    }

    public function mati(){
        echo "mobil ini tidak bisa jalan";
    }
}

$mobil = new mobil();
echo "warna mobilnya :" . $mobil->warna . "<br>";
echo "brand nya yaitu :" . $mobil->brand . "<br>";

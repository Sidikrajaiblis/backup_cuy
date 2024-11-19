<?php

class bangundatar{
    public $hasil1;
    public $hasil2;
    public $hasil3;
    public $hasil4;

    function Persegi($Sisi){
        echo "Sisi: $Sisi <br>";

        $this->hasil1 *=2;
        echo "Hasilnya : $this->hasil1";
    }
    function Segitiga($Alas, $Tinggi){
        echo "Alas: $Alas <br>";
        echo "Tinggi: $Tinggi <br>";

        $this->hasil2 = $Alas * $Tinggi;
        echo "Hasilnya : $this->hasil2";
    }
    function PersegiPanjang($Luas, $Panjang, $Lebar){
        echo "Luas: $Luas <br>";
        echo "Panjang: $Panjang <br>";
        echo "Lebar: $Lebar <br>";

        $this->hasil3 = $Luas * $Panjang * $Lebar;
        echo "Hasilnya : $this->hasil3";
    }
    function Lingkaran($Pi, $r){
        echo "Pi/Phi: $Pi <br>";
        echo "Jari Jari: $r <br>";

        $r *=2;
        $this->hasil4 = $Pi * $r;
        echo "Hasilnya : $this->hasil4";
    }
}

$hasil = new bangundatar();

echo "<h2>Luas Persegi </h2>";
echo $hasil-> Persegi(2);
echo "<hr>";

echo "<h2>Luas Persegi </h2>";
echo $hasil-> Segitiga(10,6);
echo "<hr>";

echo "<h2>Luas Persegi </h2>";
echo $hasil-> PersegiPanjang(20, 10, 5);
echo "<hr>";

echo "<h2>Luas Persegi </h2>";
echo $hasil-> Lingkaran(3.14, 5);
echo "<hr>";

?>
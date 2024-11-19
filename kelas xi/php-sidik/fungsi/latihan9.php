<?php
    echo "<h2>Luas Persegi </h2>";
    function Persegi($Sisi){
        echo "Sisi: $Sisi <br>";

        $Sisi *=2;
        echo "Hasilnya : $Sisi";
    }

    Persegi(2);
    echo "<hr>";

    echo "<h2>Luas Segitiga </h2>";
    function Segitiga($Alas, $Tinggi){
        echo "Alas: $Alas <br>";
        echo "Tinggi: $Tinggi <br>";

        $Hasil = $Alas * $Tinggi;
        echo "Hasilnya : $Hasil";
    }

    Segitiga(10,6);
    echo "<hr>";

    echo "<h2>Luas Persegi Panjang </h2>";
    function PersegiPanjang($Luas, $Panjang, $Lebar){
        echo "Luas: $Luas <br>";
        echo "Panjang: $Panjang <br>";
        echo "Lebar: $Lebar <br>";

        $Hasil = $Luas * $Panjang * $Lebar;
        echo "Hasilnya : $Hasil";
    }

    PersegiPanjang(20, 10, 5);
    echo "<hr>";

    echo "<h2>Luas Lingkaran </h2>";
    function Lingkaran($Pi, $r){
        echo "Pi/Phi: $Pi <br>";
        echo "Jari Jari: $r <br>";

        $r *=2;
        $Hasil = $Pi * $r;
        echo "Hasilnya : $Hasil";
    }

    Lingkaran(3.14, 5);
    echo "<hr>";

?>
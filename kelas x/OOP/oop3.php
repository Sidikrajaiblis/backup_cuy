<?php
class HitungBangunSegitiga{
    public $alas;
    public $tinggi;

    public function __construct($a, $b)
    {
        $this->alas = $a;
        $this->tinggi = $b;
    }

    public function luasSegitiga()
    {
        $luas = ($this->alas * $this->tinggi) /2;
        return $luas;
    }
}

$segitiga = new HitungBangunSegitiga(10, 15);
echo "Alas : " . $segitiga->alas . "<br>";
echo "Tinggi : " . $segitiga->tinggi . "<br>";
echo "Luas Segitiga : " . $segitiga->luasSegitiga() . "<hr>";
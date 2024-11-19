<?php

class Komputer
{
    public $pemilik = "";
    public $merk = "";
    public $ukuran_layar = "";

    public function dinyalakan()
    {
        return "dinyalakan";
    }

    public function dimatikan()
    {
        return "dimatikan";
    }
}


$komputer1 = new komputer();
$komputer1->pemilik = "dikzz";
$komputer1->merk = "Toyota";
$komputer1->ukuran_layar = "8k";
echo "pemilik : " . $komputer1->pemilik . "<br>";
echo "merk : " . $komputer1->merk . "<br>";
echo "ukuran layar : " . $komputer1->ukuran_layar . "<br><hr>";

$komputer2 = new komputer();
$komputer2->pemilik = "ucok";
$komputer2->merk = "RTX";
$komputer2->ukuran_layar = "4090";
echo "pemilik : " . $komputer2->pemilik . "<br>";
echo "merk : " . $komputer2->merk . "<br>";
echo "ukuran layar : " . $komputer2->ukuran_layar . "<br><hr>";

$komputer3 = new komputer();
$komputer3->pemilik = "pablo";
$komputer3->merk = "linux";
$komputer3->ukuran_layar = "4k";
echo "pemilik : " . $komputer3->pemilik . "<br>";
echo "merk : " . $komputer3->merk . "<br>";
echo "ukuran layar : " . $komputer3->ukuran_layar . "<br><hr>";

$komputer4 = new komputer();
$komputer4->pemilik = "alok";
$komputer4->merk = "shotgun2";
$komputer4->ukuran_layar = "420";
echo "pemilik : " . $komputer4->pemilik . "<br>";
echo "merk : " . $komputer4->merk . "<br>";
echo "ukuran layar : " . $komputer4->ukuran_layar . "<br><hr>";

$komputer5 = new komputer();
$komputer5->pemilik = "martis";
$komputer5->merk = "ashura";
$komputer5->ukuran_layar = "35";
echo "pemilik : " . $komputer5->pemilik . "<br>";
echo "merk : " . $komputer5->merk . "<br>";
echo "ukuran layar : " . $komputer5->ukuran_layar . "<br><hr>";

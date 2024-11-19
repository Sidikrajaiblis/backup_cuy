<?php
class Komputer
{
    public $pemilik = "";
    public $merk = "";
    public $ukuran = "";

    public function dinyalakan()
    {
        return "dinyalakan";
    }
    public function dimatikan()
    {
        return "dimatikan";
    }
}

$komputer1 = new Komputer();
$komputer1->pemilik = "Ubi";
$komputer1->merk = "RTX";
$komputer1->ukuran = "16 inc";
echo "Pemilik komputer : " . $komputer1->pemilik . "<br>";
echo "Merk komputer : " . $komputer1->merk . "<br>";
echo "Ukuran komputer : " . $komputer1->ukuran . "<br>";
echo "Keadaan komputer : " . $komputer1->dinyalakan() . "<hr>";

$komputer2 = new Komputer();
$komputer2->pemilik = "Ajul";
$komputer2->merk = "GTX";
$komputer2->ukuran = "13 inc";
echo "Pemilik komputer : " . $komputer2->pemilik . "<br>";
echo "Merk komputer : " . $komputer2->merk . "<br>";
echo "Ukuran komputer : " . $komputer2->ukuran . "<br>";
echo "Keadaan komputer : " . $komputer2->dimatikan() . "<hr>";

$komputer3 = new Komputer();
$komputer3->pemilik = "Kaira";
$komputer3->merk = "HP";
$komputer3->ukuran = "10 inc";
echo "Pemilik komputer : " . $komputer3->pemilik . "<br>";
echo "Merk komputer : " . $komputer3->merk . "<br>";
echo "Ukuran komputer : " . $komputer3->ukuran . "<br>";
echo "Keadaan komputer : " . $komputer3->dinyalakan() . "<hr>";

$komputer4 = new Komputer();
$komputer4->pemilik = "Maji";
$komputer4->merk = "MSI";
$komputer4->ukuran = "13 inc";
echo "Pemilik komputer : " . $komputer4->pemilik . "<br>";
echo "Merk komputer : " . $komputer4->merk . "<br>";
echo "Ukuran komputer : " . $komputer4->ukuran . "<br>";
echo "Keadaan komputer : " . $komputer4->dinyalakan() . "<hr>";

$komputer5 = new Komputer();
$komputer5->pemilik = "Noya";
$komputer5->merk = "Asus";
$komputer5->ukuran = "14 inc";
echo "Pemilik komputer : " . $komputer5->pemilik . "<br>";
echo "Merk komputer : " . $komputer5->merk . "<br>";
echo "Ukuran komputer : " . $komputer5->ukuran . "<br>";
echo "Keadaan komputer : " . $komputer5->dinyalakan() . "<hr>";
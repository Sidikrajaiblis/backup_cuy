<?php
// mengdefinisikan sebuah class
class Kucing
{
    //membuat property atau atribut
    public $warna = "Putih";
    public $jumlahkaki= 4;
    public $jenisbulu = "panjang";
    public $makananfavorit = "pindang";

    // membuat method (behaviour/prilaku)
    public function bersuara()
    {
        return "Meowng... meowng... meowng...";
    }
    public function berburu()
    {
        return "berburu jerry";
    }
}

// membuat object (inisiasi object)
$kucing1 = new Kucing();
echo "warna kucing : " . $kucing1->warna . "<br>";
echo "jumlah kaki kucing : " . $kucing1->jumlahkaki . "<br>";
echo "jenis bulu kucing : " . $kucing1->jenisbulu . "<br>";
echo "makanan favorit kucing : " . $kucing1->makananfavorit . "<br>";
echo "sifat kucing : " . $kucing1->bersuara() . "<hr>";

$kucing2 = new Kucing();
//set warna kucing
$kucing2->warna = "Abu";
$kucing2->jenisbulu = "Pendek";
$kucing2->makananfavorit = "Whiskas";
echo "warna kucing : " . $kucing2->warna . "<br>";
echo "jumlah kaki kucing : " . $kucing2->jumlahkaki . "<br>";
echo "jenis bulu kucing : " . $kucing2->jenisbulu . "<br>";
echo "makanan favorit kucing : " . $kucing2->makananfavorit . "<br>";
echo "sifat kucing : " . $kucing2->berburu() . "<hr>";
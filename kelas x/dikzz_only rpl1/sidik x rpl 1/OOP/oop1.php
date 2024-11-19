<?php
//mendefinisikan sebuah class
class Kucing
{
    //membuat property atau attributes
    public $warna = "abu";
    public $jumlah_kaki = "4";
    public $jenis_bulu = "panjang";
    public $makanan_fav = "ikan pindang";

    //membuat method behavior / perilaku
    public function bersuara()
    {
        return "meowng... meowng... meowng...";
    }

    public function berburu()
    {
        return "berburu ikan";
    }
}

//membuat object (inisiasi object)
$kucing1 = new kucing();
echo "warna kucing : " . $kucing1->warna . "<br>";
echo "jumlah kaki : " . $kucing1->jumlah_kaki . "<br>";
echo "jenis bulu : " . $kucing1->jenis_bulu . "<br>";
echo "makanan favorit : " . $kucing1->makanan_fav . "<br>";
echo "suara kucing : " . $kucing1->bersuara() . "<hr>";

$kucing2 = new kucing();
//set warna kucing
$kucing2->warna = "oyen";
echo "warna kucing : " . $kucing2->warna . "<br>";
echo "sifat kucing : " . $kucing2->berburu() . "<hr>";

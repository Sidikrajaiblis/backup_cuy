<?php 

// mengdefinisikan sebuah class
class Kucing
{
    // membuat property atau atribut
    public $warna = "merah";
    public $makan;

    // construct adalah method khusus yang akan
    // di panggil pertama kali
    public function __construct($a, $b)
    {
        $this->warna = $a;
        $this->makan = $b;
    }

    // membat behaviour method
    public function bersuara()
    {
        return "meong meong";
    }
}

//membuat object
$kucing1 = new Kucing("Kuning"," whiskas");
echo "Warna Kucing 1 : " . $kucing1->warna . "<br>";
echo "Makanan Kucing 1 : " . $kucing1->makan . "<hr>";

$kucing2 = new Kucing("hijau", "Campina");
echo "Warna Kucing 2 : " . $kucing2->warna . "<br>";
echo "Makanan Kucing 2 : " . $kucing2->makan . "<hr>";
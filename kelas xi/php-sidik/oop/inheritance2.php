<?php

class bangun_datar{

    public $luas_persegi_panjang;
    public $keliling_persegi_panjang;
    
}

    class luas extends bangun_datar{

        public function PersegiPanjang($Panjang, $Lebar){
            echo "<h2>Luas Persegi Panjang </h2>";
            // echo "Luas: $Luas <br>";
            echo "Panjang: $Panjang <br>";
            echo "Lebar: $Lebar <br>";
    
            $this->luas_persegi_panjang =$Panjang * $Lebar;
            echo "Hasilnya : $this->luas_persegi_panjang";
            echo "<hr>";
        }
    }

    class keliling extends bangun_datar{
        public function persegi_panjang($panjang,$lebar){
            echo "<h2>Keliling   Persegi Panjang </h2>";
            echo "Panjang : $panjang <br>";
            echo "Lebar : $lebar <br>";

            $this->keliling_persegi_panjang = 2 * ($panjang + $lebar);
            echo "Hasilnya : $this->keliling_persegi_panjang";
        }
    }


    $cetak = new luas();
    echo $cetak->PersegiPanjang(10, 5);


    $cetak2 = new keliling();
    echo $cetak2->persegi_panjang(2,3);

?>
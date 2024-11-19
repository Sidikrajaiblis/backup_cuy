<?php
class contoh{
    
    public $nama = "sidik";

    public function perkenalan(){
        echo "Assalamualaikum";

    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
echo "<br>";
echo $cetak->nama;

?>
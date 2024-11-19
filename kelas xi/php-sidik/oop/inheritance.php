<?php

class kendaraan{
    public function a(){
        echo "saya adalah kendaraan";
    }
}



    class mobil extends kendaraan{
        public function b(){
            echo $this->a();
        }
    }


    $cetak = new mobil();
    echo $cetak->b();

?>
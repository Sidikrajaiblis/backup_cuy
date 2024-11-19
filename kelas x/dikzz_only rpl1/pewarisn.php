<?php

class Produk{
    public $jenis = "makanan", $nama = "Mie ayam";

}

class Makanan Extends Produk{
    
    public function ambil(){
        return "$this->jenis, $this->nama";
       
    }
}

$a = new Makanan();
echo $a->ambil();
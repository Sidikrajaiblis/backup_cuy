<?php

class Buah{
    public $jenis1 = "pisang", $warna1 = " kuning";
    public $jenis2 = "strawbery", $warna2 = "merah";

}

class pisang Extends Buah{
    
    public function jenis(){
        return "saya  $this->jenis1 dan warnanya $this->warna1 ";
       
    }
}

class Strawbery Extends Buah{
    
    public function jenis(){
        return "saya  $this->jenis2 dan warnanya $this->warna2 ";
       
    }
}

$buah1 = new pisang();
echo "Buah apakah saya? " . $buah1->jenis() . "<br>" ;

$buah2 = new Strawbery();
echo "Buah apakah saya? " .$buah2->jenis();

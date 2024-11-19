<?php

class Hewan{
    public $nama1 = "caty", $jenis1 = "Kucing Meow!", $hewan1 = "Kucing", $sedang1 = "tidur";
    public $nama2 = "binggo", $jenis2 = "Anjing woof!", $hewan2 = "Anjing", $sedang2 = "berlari";
}
class Kucing Extends Hewan{
    
    public function jenis(){
        return "Nama : $this->nama1  Jenis : $this->jenis1 Saya adalah $this->hewan1. $this->hewan1 sedang $this->sedang1 ";
       
    }
}

class Anjing Extends Hewan{
    
    public function jenis(){
        return "Nama : $this->nama2 Jenis : $this->jenis2  Saya adalah $this->hewan2. $this->hewan2 sedang $this->sedang2 ";
       
    }
}

$hewan1 = new Kucing();
echo $hewan1->jenis() . "<br>" ;

$hewan2 = new Anjing();
echo $hewan2->jenis();
<?php

function biodata($nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat,$hobi){
    echo "Nama : $nama <br>";
    echo "Tempat lahir : $tempat_lahir <br>";
    echo "Tanggal lahir : $tanggal_lahir <br>";
    echo "Jenis kelamin : $jenis_kelamin <br>";
    echo "Agama : $agama <br>";
    echo "Alamat : $alamat <br>";
    echo "Hobi : $hobi <br>";
}




function menghitung($angka1,$angka2){
    echo"Bilangan ke 1 : $angka1 <br>";
    echo"Bilangan ke 2 : $angka2 <br>";
    $hasil = $angka1 + $angka2;
    echo"Hasilnya : $hasil <br>";
}

menghitung(10,20);

?>
<?php
//data json
$dataJSON = '[
    {
        "nama": "Nurul Huda",
        "alamat": "bandung"
    },
    {
        "nama": "Nurul Huda",
        "alamat": "bandung"
    }
] ';

//dikonversikan ke JSON
$list = json_decode($dataJSON);

    //tampilkan datanya
    foreach ($list as $mahasiswa){
        echo "Nama : {$mahasiswa->nama} <br>";
        echo "Alamat : {$mahasiswa->alamat} <br>";
        echo"<hr>";
    }

?>
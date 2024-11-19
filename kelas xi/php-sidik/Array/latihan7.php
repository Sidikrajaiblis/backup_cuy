<?php

$data = [
    [
        "nama" => "Safitri",
        "buah" => [
                   0 => "Anggur"
        ],

        "buahan" => 
                [
                   0 => "Anggur ijo","Anggur Putih"  
                ]
    ],
    [
        "nama" => "Rahman",
        "buah" => [
                   0 => "Anggur",
                   1 => "Apel"
        ],

        "buahan" => 
                [
                   0 => "Anggur ijo","Anggur Putih",
                   1 => "Apel Merah","Apel ijo" 
                ]
    ]
];

foreach ($data as $buah) {
    echo "Nama Pemilik : " .$buah["nama"]. "<br>";
    echo "Daftar Buah Kesukaan : ";

    foreach ($buah["buah"] as $buah2) {
        echo "<ul>";
            echo"<li> $buah2 </li>";
            foreach ($buah["buahan"] as $buahan) {
            echo "<ul>";
                echo "<li> $buahan </li>";
            echo "</ul>";
            }

        echo "</ul>";
    }
    echo "<hr>";
}

?>
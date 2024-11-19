<?php

$siswa = [
    [
        "nis" => "1001",
        "nama" => "Muhamad Mulki Sukmana",
        "kelas" => "XI RPL 1",
        "eskul" => [
            "nama_eskul" => "Tari",
            "nama_eskul2" => "karawitan",
            "nama_eskul3" => "futsal",
        ]
    ],
    [
        "nis" => "1002",
        "nama" => "dudi",
        "kelas" => "XI RPL 2",
        "eskul" => [
            "nama_eskul" => "futsal",
        ]
    ],
];

foreach ($siswa as $murid) {
    echo "Nis : " .$murid["nis"]. "<br>";
    echo "Nama : " .$murid["nama"]. "<br>";
    echo "Kelas : " .$murid["kelas"]. "<br>";
    echo "Eskul : ";
    foreach ($murid["eskul"] as $a) {
        echo "<ul>";
            echo"<li>$a</li>";
        echo "</ul>";
    }
    echo "<hr>";
}

?>
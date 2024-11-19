<?php

$artikel = [
    [
        "judul" => "The night country",
        "penulis" => "Melisa albert",
        "tanggal_rilis" => "11 juli 2024",
        "penerbit" => "Gramedia pustaka utama"
    ],
    [
        "judul" => "The atala",
        "penulis" => "Lyraemon",
        "tanggal_rilis" => "5 juli 2024",
        "penerbit" => "Gramedia pustaka utama"
    ],
    [
        "judul" => "Heart of the sun warior",
        "penulis" => "Sue lynn tan",
        "tanggal_rilis" => "17 september",
        "penerbit" => "Gramedia pustaka utama"
    ],
    [
        "judul" => "jini jinny",
        "penulis" => "jeong you-jeong",
        "tanggal_rilis" => "20 juni 2024",
        "penerbit" => "Gramedia pustaka utama"
    ],
    [
        "judul" => "Eragon",
        "penulis" => "Cristopher paolini",
        "tanggal_rilis" => "30 september 2024",
        "penerbit" => "Gramedia pustaka utama"
    ],
];

foreach ($artikel as $novel) {
    echo "Judul : " .$novel["judul"]. "<br>";
    echo "Penulis : " .$novel["penulis"]. "<br>";
    echo "Tanggal rilis : " .$novel["tanggal_rilis"]. "<br>";
    echo "Penerbit : " .$novel["penerbit"]. "<br>";
    echo "<hr>";
}

?>
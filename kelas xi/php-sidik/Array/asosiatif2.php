<?php

$siswa = [
    [
        "nama" => "Muhamad Mulki Sukmana",
        "jenis_kelamin" => "Laki-laki",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => "dudi",
        "jenis_kelamin" => "Laki-laki",
        "kelas" => "XI RPL 2"
    ],
];

foreach ($siswa as $murid) {
    echo "Nama : " .$murid["nama"]. "<br>";
    echo "Jenis Kelamin : " .$murid["jenis_kelamin"]. "<br>";
    echo "Kelas : " .$murid["kelas"]. "<br>";
    echo "<hr>";
}

?>
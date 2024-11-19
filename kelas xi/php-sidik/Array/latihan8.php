<?php
//data json
$dataJSON = '[
    {
        "no": "1",
        "judul": "Laskar Pelangi",
        "genre": "Novel",
        "penulis": "Andrea Hirata",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2005"
    },
    {
        "no": "2",
        "judul": "Ayat-ayat Cinta",
        "genre": "Novel",
        "penulis": "Habiburrahman El Shirazy",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2004"
    },
    {
        "no": "3",
        "judul": "Bumi Manusia",
        "genre": "Novel",
        "penulis": "Pramoedya Ananta Toer",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "1988"
    },
    {
        "no": "4",
        "judul": "Pulang",
        "genre": "Novel",
        "penulis": "Leila S. Chudori",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2012"
    },
    {
        "no": "5",
        "judul": "Supernova",
        "genre": "Novel",
        "penulis": "Dee Lestari",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2001"
    },
    {
        "no": "6",
        "judul": "Saman",
        "genre": "Novel",
        "penulis": "Ayu Utami",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "1998"
    },
    {
        "no": "7",
        "judul": "Cinta dan Doa",
        "genre": "Novel",
        "penulis": "Rintik Sedu",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2015"
    },
    {
        "no": "8",
        "judul": "Ketika Cinta Bertasbih",
        "genre": "Novel",
        "penulis": "Habiburrahman El Shirazy",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2011"
    },
    {
        "no": "9",
        "judul": "Kedai 1001 Malam",
        "genre": "Novel",
        "penulis": "Fira Basuki",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2011"
    },
    {
        "no": "10",
        "judul": "Seperti Dendam yang Harus Dibayang Tuntas",
        "genre": "Novel",
        "penulis": "Eka Kurniawan",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2012"
    },
    {
        "no": "11",
        "judul": "Api di atas Bukit",
        "genre": "Novel",
        "penulis": "Tere Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2013"
    },
    {
        "no": "12",
        "judul": "Buku Harian Seorang istri",
        "genre": "Novel",
        "penulis": "Riawana Elita",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2015"
    },
    {
        "no": "13",
        "judul": "Pulau Hantu",
        "genre": "Novel",
        "penulis": "Tere Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2011"
    },
    {
        "no": "14",
        "judul": "Rindu",
        "genre": "Novel",
        "penulis": "Tere Liye",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2017"
    },
    {
        "no": "15",
        "judul": "Nanti Kita Cerita Tentang Hari Ini",
        "genre": "Novel",
        "penulis": "Marchella FP",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2018"
    },
    {
        "no": "16",
        "judul": "Sebuah Seni",
        "genre": "Self-help",
        "penulis": "Mark Manson",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2018"
    },
    {
        "no": "17",
        "judul": "Lima Menara",
        "genre": "Novel",
        "penulis": "A Fuadi",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2009"
    },
    {
        "no": "18",
        "judul": "Berkah Cinta",
        "genre": "Novel",
        "penulis": "Asma Nadia",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2013"
    },
    {
        "no": "19",
        "judul": "Manusia Setengah Salmon",
        "genre": "Kumpulan Cerita",
        "penulis": "Raditya Dika",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2011"
    },
    {
        "no": "20",
        "judul": "Terlalu Manis",
        "genre": "Novel",
        "penulis": "Sandiaga Uno",
        "penerbit": "Gramedia Pustaka Utama",
        "tahun_rilis": "2019"
    }
] ';

//dikonversikan ke JSON
$list = json_decode($dataJSON);
// echo "<h2>Kumpulan Novel Terbaru</h2>";

    //tampilkan datanya
    // foreach ($list as $novel){
    //     echo "No : {$novel->no} <br>";
    //     echo "Judul : {$novel->judul} <br>";
    //     echo "Genre : {$novel->genre} <br>";
    //     echo "Penulis : {$novel->penulis} <br>";
    //     echo "Penerbit : {$novel->penerbit} <br>";
    //     echo "Tahun Rilis : {$novel->tahun_rilis} <br>";
    //     echo"<hr>";
    // }
    echo "<table border='1' cellspacing='0' align='center'>";
    echo "<tr>";
    echo "<td colspan='6' align='center'> <h3>Kumpulan Novel Terbaru</h3> </td>";
    echo "</tr>";
    echo "<tr align='center'>";
        echo "<td><b> No </b></td>";
        echo "<td><b> Judul </b></td>";
        echo "<td><b> Genre </b></td>";
        echo "<td><b> Penulis </b></td>";
        echo "<td><b> Penerbit </b></td>";
        echo "<td><b> Tahun Rilis </b></td>";
    echo "</tr>";
    
    foreach ($list as $novel){
        echo "<tr>";
            echo "<td> {$novel->no} </td>";
            echo "<td> {$novel->judul} </td>";
            echo "<td> {$novel->genre} </td>";
            echo "<td> {$novel->penulis} </td>";
            echo "<td> {$novel->penerbit} </td>";
            echo "<td> {$novel->tahun_rilis} </td>";
        echo "</tr>";
    }
    echo "</table>";

?>
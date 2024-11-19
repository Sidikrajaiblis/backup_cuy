<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>denah</title>
    <link rel="stylesheet" href="denah.css">
</head>
<body>
    <?php
    $baris1 = array("fahri", "sandy", "alief", "dudi", "digo");
    $baris2 = array("rayhan", "faza", "bunga", "raven", "radit");
    $baris3 = array("Hana", "nabila", "Echa", "pahri", "rep");
    $baris4 = array("Allia", "eva", "irma", "ade", "keyndra");
    $baris5 = array("daffa", "nanda", "ndiah", "fauzan", "sri");
    $baris6 = array("asep", "sidik", "luthfi", "ilyas", "dika");

    ?>

<h2 align="center">Denah Tempat Duduk</h2>
<p align="center" class="teks1">
<b> baris 1</b><br>
<b> baris 2</b></p>
    <table border="1" cellspacing="3" bordercolor="black" width="50%" class="baris1" align="center">
    <tr>
    <?php foreach ($baris1 as $val) {
       echo "<td align='center'><b>$val</b></td>";
    } ?>    
    </tr>
    <tr>
    <?php foreach ($baris2 as $val) {
       echo "<td align='center'><b>$val</b></td>";
    } ?>    
    </tr>
    </table>

    <p align="center" class="teks1">
    <b> baris 3</b><br>
    <b> baris 4</b></p>
    <table border="1" cellspacing="3" bordercolor="black" width="50%" class="baris2" align="center">
    <tr>
    <?php foreach ($baris3 as $val) {
       echo "<td align='center'><b>$val</b></td>";
    } ?>    
    </tr>
    <tr>
    <?php foreach ($baris4 as $val) {
       echo "<td align='center'><b>$val</b></td>";
    } ?>    
    </tr>
    </table>

    <p align="center" class="teks1">
    <b> baris 5</b><br>
    <b> baris 6</b></p>
    <table border="1" cellspacing="3" bordercolor="black" width="50%" class="baris3" align="center">
    <tr>
    <?php foreach ($baris5 as $val) {
       echo "<td align='center'><b>$val</b></td>";
    } ?>    
    </tr>
    <tr>
    <?php foreach ($baris6 as $val) {
       echo "<td align='center'><b>$val</b>w2</td>";
    } ?>    
    </tr>
    </table>

    
</body>
</html>
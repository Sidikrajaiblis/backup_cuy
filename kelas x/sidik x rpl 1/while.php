<?php

$ulang = 0;

while ($ulang <= 10) {
    echo "Pengulangan Ke - $ulang<br>";
    $ulang++;
}

echo "<hr>";

$counter = 1;
while ($counter <= 10) {
    if ($counter % 2 == 1) {
        echo $counter . "-bilangan genap<br>";
    }else {
        echo $counter . "-bilangan ganjil<br>";
    }
    $counter++;
}
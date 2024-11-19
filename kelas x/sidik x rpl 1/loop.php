<?php
for ($i=20; $i >= 1; $i--) { 
    if ($i % 2== 0) {
        echo " $i Bilangan Genap <br>";
    } else {
        echo " $i Bilangan Ganjil <br>";
    }
}
echo "<hr>";

for ($i=1; $i <= 5; $i++) {
    for ($a= 1; $a <= $i; $a++) { 
        echo "$a";
    } 
    echo "<br>";
}

echo "<hr>";

for ($i=5; $i >= 1; $i--) { 
    for ($t=$i; $t >= 1; $t--) { 
        echo "$t ";
    }
    echo "<br>";
}
echo "<hr>";

for ($i=1; $i <= 5; $i++) { 
    for ($d=$i; $d >= 1; $d--) { 
        echo "$d";
    }
    echo "<br>";
}
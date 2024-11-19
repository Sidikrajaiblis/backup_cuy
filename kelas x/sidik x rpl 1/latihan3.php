<?php
for ($i=1; $i < 21; $i++) { 
    if ($i % 2 == 0) {
        echo " $i -Berkualitas <br>";
    } elseif ($i % 3 == 0) {
        echo " $i -I Love Coding <br>";
    } else {
        echo " $i -Santai <br>";
    }
}
echo "<hr>";

for ($i=1; $i < 5; $i++) { 
    for ($s=1; $s < 9; $s++) { 
        echo "#";
    }
    echo "<br>";
}
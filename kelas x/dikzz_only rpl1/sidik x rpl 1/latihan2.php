<?php

for ($i=1; $i <= 3; $i++) { 
    for ($h=1; $h <= 3; $h++) { 
       echo "ke $h "; ;
    }
    echo "<br>";
}
?>
<br>

<?php

for ($i=0; $i < 4   ; $i++) { 
    for ($l=0; $l < 1; $l++) { 
        echo "<b> $i$i$i$i$i     </b><br>";
    }
}

?>
<br>

<?php
//bintang
for ($i=0; $i <= 5; $i++) { 
     for ($t=0; $t < $i; $t++) { 
         echo "*";
     }
     echo "<br>";
}

?>
<br>

<?php
//tangga
for ($i=1; $i <= 5; $i++) { 
    for ($t=$i; $t <= 5; $t++) { 
        echo "$i";
    }
    echo "<br>";
}
?>
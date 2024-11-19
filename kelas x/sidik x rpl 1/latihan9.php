<?php

function volumelimas($a,$t)
{
    $alas = $a;
    $tinggi = $t;
    $luasalas = ($a * $t) / 2;
    $volume = ($luasalas * $t)*0.75;
    return $volume;
}

echo "volume Limas : " . volumelimas(5, 8);
?>
<br><br>
<?php

function luasbola($r, $c)
{
    $jarijari = $r;
    $jarijari2 = $c;
    $luas = (4 * 3.14 * $r * $c);
    return $luas;
}

echo "luas lingkaran : " . luasbola(2, 3);

?>
<br><br>
<?php

function volumetabung($p, $f)
{
    $jarijari = $p;
    $tinggi2 = $f;
    $volume2 = (22/7 * $p * $p * $f);
    return $volume2;
}

echo "Volume Tabung : " . volumetabung(4, 7 );

?>
<br><br>
<?php

function volumeprisma($la, $ti)
{
    $luasalas = $la;
    $tinggi3 = $ti;
    $volume3 = ($la * $ti);
    return $volume3;
}

echo "Volume Prisma : " . volumeprisma(6, 7);

?>

<?php

function timer ($hour = 00, $min = 00, $sec = 00)
{
    $time = "$hour : $min : $sec.";
    return "Timer set for $time <br>";
}
echo timer();
echo timer(10, 30,);
echo timer(00, 20, 40,);
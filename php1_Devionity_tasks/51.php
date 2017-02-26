<?php

for ($i = 200; $i <= 400; $i++) {
    $b=true;

    for ($n=2;$n<$i;$n++)
    {
        if ($i % $n == 0)
        {$b=false;}

    }

    if ($b){echo "$i <br>";
    break;}
}


<?php
for ($i = 2; $i <= 100; $i++) {
    $b=true;

    for ($n=2;$n<$i;$n++)
        {
        if ($i % $n == 0)
        {$b=false;}
        }

        if ($b){echo "$i <br>";}


}


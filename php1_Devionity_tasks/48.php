<?php

$i=2;
while ($i <= 100)
    {
        $n=2;
        $b=true;

        while ($n<$i){
        if ($i % $n == 0)  {$b=false;}
        $n++;
        }

        if ($b){echo "$i <br>";}

        $i++;
    }



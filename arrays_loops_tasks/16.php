<?php

$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9,10,11,12,13,14,15);

foreach ($arr as $value)
{
    if ($value%3 == 0)
    {
        echo "$value <br>";
    }
    else
    {
        echo "$value, ";
    }
}

<?php

function test($x, $y)
{
    return $y == 0 ? false : (float) ($x / $y); //тернарный оператор
}
echo test(1, 1) or die('Error');
echo 'Unreached line';
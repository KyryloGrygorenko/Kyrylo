<?php
$arr=array(4,2,5,19,13,0,10);
$e1=4;
$e2=3;
$e3=4;

foreach ($arr as $value) {
    if ($value == $e1 || $value == $e2 || $value == $e3 ) {
        $b='есть';
        break;
    }
    else {
        $b = 'нет';}
}
echo $b.'(значение которое совпало)'.$value;




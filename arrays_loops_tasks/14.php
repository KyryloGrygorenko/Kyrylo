<?php
$arr=array(4,2,5,19,13,0,10);
$e=4;
//$e=3;
//$e=4;

foreach ($arr as $value) {
    if ($value == $e) {
        $b='есть';
        break;
    }
    else {
        $b = 'нет';}
}
echo $b.'(значение которое совпало)'.$value;




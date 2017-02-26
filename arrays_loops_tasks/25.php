<?php

//25. Ваше задание создать массив, наполнить это случайными значениями
// (функция rand), найти максимальное и минимальное значение и поменять их
// местами.

$arr= array();

for ($i=0; $i <=10; $i++){
    $arr[$i]= rand(1,100);
}

echo '<pre>';
print_r($arr);
echo '<pre>';
//echo max($arr);
//echo min($arr);

$max=max($arr);
$min=min($arr);

foreach ($arr as $key => $value){
    if ($value==$max) {
        $arr[$key]=$min;
    }
    elseif ($value==$min){
        $arr[$key]=$max;
    }
}
echo '<pre>';
print_r($arr);
echo '<pre>';

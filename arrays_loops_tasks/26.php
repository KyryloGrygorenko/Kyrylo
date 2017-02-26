<?php

$arr= array();

for ($i=1; $i <=10; $i++){
    $arr[$i]= rand(0,100);
}
$proizvedenie=1;
foreach ($arr as $key => $value) {
    if ($key % 2 == 0 && $value != 0) {
        $proizvedenie = $proizvedenie * $value;
        echo "$arr[$key] это число имеет парный индекс ключа <br> ";

    } elseif ($key % 2 != 0 && $value > 0) {
        echo "$arr[$key] это число имеет НЕ парный индекс ключа<br>";
    }
}
echo '<pre>';
print_r($arr);
echo '<pre>';
echo "это произведение элементов, которые больше 
ноля и у которых парные индексы - $proizvedenie";
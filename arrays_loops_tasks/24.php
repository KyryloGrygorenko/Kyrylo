<?php
$input ="52525";
$choice=2;
$repeat_times=0;
for ($i=0; $i <= strlen($input); $i++){
    $count_elem = $input[$i];
    if ($count_elem == $choice) {
        $repeat_times++;
    }
}
echo $repeat_times;



//echo strlen($input); эта функция считает количество символов в строке

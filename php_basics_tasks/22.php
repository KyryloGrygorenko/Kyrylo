<?php

$a = -20;
$bool_type = (bool) $a;   // приведение $a в булев тип;
var_dump($bool_type);
echo "$bool_type <br>";
echo 'При приведение к булевому типу любое значение отличное от 0 будет 1 и 0 будет 0.
0 это False, 1 это True';

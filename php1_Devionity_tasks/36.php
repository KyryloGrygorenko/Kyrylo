<?php
//36. Логические операторы

$a = false && true || false && true || !false && true; //  we got true
var_dump($a);
echo '<br>';

$x= 5;
$f= $x %2;

var_dump ((boolean)$f);
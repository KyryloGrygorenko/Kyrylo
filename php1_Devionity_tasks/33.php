<?php
//33. Арифметические операторы
$days= 364;
$hours= 24;
$minutes=60;
$seconds=60;

$year_seconds= $seconds*$minutes*$hours*$days;
echo $year_seconds;
echo '<br>';
echo $ost_del =  $year_seconds % 2;
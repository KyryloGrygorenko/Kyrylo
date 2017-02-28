<?php
$input ='5552';
$sum=0;
for ($i=0; $i< strlen($input); $i++){
    $sum+= $input[$i];
}
echo $sum;
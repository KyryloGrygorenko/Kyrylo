<?php
$str = '';
for ($i = 1; $i <= 9; $i++)
{
    for ($b=0;$b<$i;$b++){
        $str .=$i;
    }
    echo $str.'<br>';
    $str= '';

}
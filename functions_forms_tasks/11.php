<?php

//Functions

function first_symbol_to_upper ($sentences)
{
    $sentences_arr=explode('. ',$sentences);
    for ($n=0;$n<count($sentences_arr);$n++)
    {
        $sentences = mb_strtoupper(mb_substr($sentences_arr[$n], 0, 1)) .mb_substr($sentences_arr[$n], 1);

        if ($n==(count($sentences_arr)-1)){echo $sentences . ' ';}// для последнего предложения, что б не было 2х точек.
        else {echo $sentences . '. ';}
    }
}


//Logic

$sentences='а Васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.';

first_symbol_to_upper($sentences);











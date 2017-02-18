<?php

$i= 4;
switch ($i) {
    case ($i>=1 && $i<=5):
        echo "Это рабочий день";
        break;
    case ($i>=6 && $i<=7):
        echo "Это выходной день";
        break;
    case ($i>8 || $i<=0 ):
        echo "Неизвестный день";
        break;
}


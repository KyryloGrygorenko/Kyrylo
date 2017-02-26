<?php



$arr = array('Пн','Вт','Ср','ЧТ','Пт','Сб','Вс');
$day='Сб';
foreach ($arr as $value)
{
    if ($value == 'Сб')
    {
        echo "<i>$value </i>";
    }
    else
    {
        echo "$value ";
    }
}

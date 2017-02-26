<?php



$arr = array('Пн','Вт','Ср','ЧТ','Пт','Сб','Вс');

foreach ($arr as $value)
{
    if ($value == 'Сб' || $value == 'Вс')
    {
        echo "<b>$value</b>";
    }
    else
    {
        echo $value;
    }
}

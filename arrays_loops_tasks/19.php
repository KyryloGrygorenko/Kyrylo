<?php

$arr = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');

foreach ($arr as $value)
{
    if ($value == date("l"))
    {
        echo "<i>$value </i>";
    }
    else
    {
        echo "$value ";
    }
}

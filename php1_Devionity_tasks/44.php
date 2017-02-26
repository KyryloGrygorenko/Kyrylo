<?php
//44. Конструкции условий: if / else / elseif
$x = 125;
$y = -32;

if ($y > $x ) {
    $message = "{$y} is a maximum value";
}
else {
    $message = "{$x} is a maximum value ";
}

echo $message;
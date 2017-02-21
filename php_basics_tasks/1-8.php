
<?php

$name= 'Кирилл';
$age= 22;

echo "Меня зовут: {$name} </br>";


if (is_numeric($age)) {
    echo "Мне {$age} лет </br>";
    if ($age >=18 & $age <=59) {
        echo "Вам еще работать и работать";

    } elseif ($age >59) {
        echo "Вам пора на пенсию";
    } elseif ($age >=1 & $age<18)  {
        echo "Вам еще рано работать";
    }
}

else {
    echo "Неизвестный возраст";
}

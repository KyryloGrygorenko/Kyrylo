<?php


/* Изучаем PHP онлайн. Часть I _18. Использование print_r Задание

$myArray = array(0 => 'Ukraine', 1 => 'Russia',2 => 'Poland',3 => 'Germany',4 => 'Italy');
print_r($myArray);
echo '<br>';
echo '<pre>';
print_r($myArray);
echo '</pre>';
*/


/* Изучаем PHP онлайн. Часть I _19. Ассоциативные массивы Задание
<?php
$capital_state = array('Ukraine' => 'Kiev', 'Russia' => 'Moscow', 'Poland' => 'Warsaw', 'Germany' => 'Berlin', 'Italy' =>'Rome');
print_r($capital_state);


/* Изучаем PHP онлайн. Часть I _20.Многомерные массивы
<?php
$author1= array('price' => '17uah' , 'style' => 'detektiv', 'author1' => 'Arthur Conan Doyle');
$author2= array('price' => '19uah' , 'style' => 'educational','author2' => 'Genrich Altshuller');
$author3= array('price' => '27uah' , 'style' => 'science','author3' => 'Gulia Norbek');
$books = array($author1, $author2, $author3);
// output
echo '<pre>';
print_r($books);
echo '</pre>';


/* Изучаем PHP онлайн. Часть I _22.Константы
<?php

define('UKRAINE', '3500$ PER MONTH AVERAGE SALARY');
define('USA', '450$ PER MONTH AVERAGE SALARY');
define('GERMANY', '900$ PER MONTH AVERAGE SALARY');
define('AUSTRIA', '1100$ PER MONTH AVERAGE SALARY');

$average_salary= array(UKRAINE,USA,GERMANY,AUSTRIA );

echo $average_salary[0];


/* Изучаем PHP онлайн. Часть I _23. Переменные переменных
<?php
$hello = 'rich';
$rich = 'smart';
$smart = 'prosper';
$prosper = 'apple';
$apple= '40000 $ income in 2018';

echo $$$$$hello;

/* Изучаем PHP онлайн. Часть I _28. Предопределенные переменные
<form action="index.php" method="post">
    <input type="text" name="name"/>
    <input type="text" name="email"/>
    <input type="phone" name="phone">
    <input type="submit"/>
</form>
<?php
print_r($_POST);
?>
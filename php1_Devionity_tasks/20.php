<?php
// Изучаем PHP онлайн. Часть I _20.Многомерные массивы

$author1= array('price' => '17uah' , 'style' => 'detektiv', 'author1' => 'Arthur Conan Doyle');
$author2= array('price' => '19uah' , 'style' => 'educational','author2' => 'Genrich Altshuller');
$author3= array('price' => '27uah' , 'style' => 'science','author3' => 'Gulia Norbek');
$books = array($author1, $author2, $author3);
// output
echo '<pre>';
print_r($books);
echo '</pre>';
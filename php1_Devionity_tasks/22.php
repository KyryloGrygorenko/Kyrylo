<?php
// Изучаем PHP онлайн. Часть I _22.Константы


define('UKRAINE', '3500$ PER MONTH AVERAGE SALARY');
define('USA', '450$ PER MONTH AVERAGE SALARY');
define('GERMANY', '900$ PER MONTH AVERAGE SALARY');
define('AUSTRIA', '1100$ PER MONTH AVERAGE SALARY');

$average_salary= array(UKRAINE,USA,GERMANY,AUSTRIA );

echo $average_salary[0];

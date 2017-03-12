<?php
//Задание
//3. Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
//Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.


//Functions

function isRequestPost()  {return (bool) $_POST;}

function remove_words_max_symbols (&$arr,&$string_edited)
{
    $j=$_POST['symbols_amount'];
    $arr_edited=[];
    for ($n=0;$n<count($arr);$n++)
    {
        if (mb_strlen($arr[$n],'UTF-8')<=$j){  //mb_strlen($name, 'UTF-8') Нужно указать кодировку текста для верного подсчета количества символовстроки.
            $arr_edited[]=$arr[$n];
        }
    }
    $string_edited= implode(' ',$arr_edited);
}


//Logic

//расскоментируйте $string и закомментируйте $string ниже если нет документа с текстом
//$string='Зачем я не птица, не хищная птица!Ну и т. д. Там и еще есть разные мысли, да бог с ними! А вот куда это вы утром ходили сегодня, Варвара Алексеевна? Я еще и в должность не сбирался, а вы, уж подлинно как пташка весенняя, порхнули из комнаты и по двору прошли такая веселенькая. Как мне-то было весело, на вас глядя! Ах, Варенька, Варенька! вы не грустите; слезами горю помочь нельзя; это я знаю, маточка моя, это я на опыте знаю. Теперь же вам так покойно, да и здоровьем вы немного поправились. Ну, что ваша Федора? Ах, какая же она добрая женщина! Вы мне, Варенька, напишите, как вы с нею там живете теперь и всем ли вы довольны? Федора-то немного';

$string=file_get_contents('text.txt');//открываем файл с текстом и присваиваем содержание в значение $string
$arr= explode(' ',$string);           // переводим строки в массив
$string_edited='';

if (isRequestPost()){
    remove_words_max_symbols ($arr,$string_edited);
    echo 'Лишние слова были удалены как Вы соизволили, сударь!';
}

else {echo 'Ведите максимальное количество символов в слове ';}


$f = fopen('text_edited.txt', 'w');
fwrite($f, $string_edited);
fclose($f);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="symbols_amount" size="9">
    <button>Подтвердить</button>
    <h2>Исходный текст</h2>
    <?=$string?>
    <h2>Отредактированный текст</h2>
    <?=$string_edited?>
</form>

</body>
</html>

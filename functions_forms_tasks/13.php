<?php

/*13. Есть строка $string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня
 черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';

Подсчитайте, сколько раз каждый фрукт встречается в этой строке. Выведите в виде списка в порядке уменьшения количества:

Пример вывода:
яблоко – 12
черешня – 8
груша – 5
слива - 3*/

//Functions

function isRequestPost()  {return (bool) $_POST;}

function word_unique_count_and_sort (&$string) //функция считает количество повторений каждого слова в тексте и сортирует от большего к меньшему
{
    $arr = explode(' ', $string);

//    var_dump($arr);
//    echo '<br>';

    $arr_count = [];
    $string_edited = '';
    $arr_edited= array();
    $string_edited_sorted='';

    for ($n = 0; $n < count($arr); $n++) {
        $count = 1;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$n] == $arr[$i]) {
                $arr_count[$arr[$n]] = $count;
                $count++;
            }
        }
    }

    foreach ($arr_count as $key => $value) {
        $arr_edited[$key]=$value;
    }

    arsort($arr_edited);   //сортируем массив по количеству повторений слова (от большего к меньшему)

    foreach ($arr_edited as $key => $value) {
        if ($key !== "" && $value !==" ") // дополнительная проверка, что б не выводило -1 при пустом массиве
        {$string_edited_sorted.= '<br>'. $key . '-' . $value;}
    }
    echo $string_edited_sorted;


}

//Logic

$string='';
if(isRequestPost()){$string=$_POST['text'];}
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
    <textarea rows="8" cols="50" name="text" ></textarea>
    <button>Подтвердить</button>
</form>

<h2>Исходный текст</h2>
<?=$string;?>

<h2>Количество повторений слов</h2>
<?php word_unique_count_and_sort ($string)?>

</body>
</html>

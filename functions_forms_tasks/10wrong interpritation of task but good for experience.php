<?php
//10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
// Текст должен вводиться с формы.

//Functions

function isRequestPost()  {return (bool) $_POST;}

function word_unique_count (&$string) //функция считает количество повторений каждого слова в тексте
{
    $arr = explode(' ', $string);
    $arr_count = [];
    $string_edited = '';

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
        //if ($value < 2) {
       //     $string_edited .= $key . '-' . $value . 'time' . '; ';
       // }

            $string_edited .= $key . '-' . $value . '; ' ;

    }
    echo $string_edited;
}



//Logic

$string='';
if(isRequestPost()){$string=$_POST['text'];
}
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
    <input type="text" name="text">
    <button>Подтвердить</button>
</form>

<h2>Исходный текст</h2>
<?=$string;?>

<h2>Отредактированный текст</h2>
<?php word_unique_count ($string)?>

</body>
</html>

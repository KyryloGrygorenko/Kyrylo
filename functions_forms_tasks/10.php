<?php
//10. Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами.
// Текст должен вводиться с формы.

//Functions

function isRequestPost()  {return (bool) $_POST;}

function word_unique_count (&$string) //функция считает количество уникальных слов в тексте
{
    $arr = explode(' ', $string);
    $arr_count = [];
    $arr_unique = [];

    for ($n = 0; $n < count($arr); $n++) {
        $count = 1;
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$n] == $arr[$i]) {
                $arr_count[$arr[$n]] = $count;
                $count++;
            }
        }
    }
    foreach ($arr_count as $key  =>  $value){
        if ($value == 1){
            $arr_unique[$key] =$value ;
        }
    }

    $count_unique = count($arr_unique);

    if($_POST){echo $count_unique;}
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
    <textarea rows="4" cols="36" name="text" ></textarea>
    <button>Подтвердить</button>
</form>

<h2>Исходный текст</h2>
<?=$string;?>

<p>Количесвто уникальных слов в тексте :</p>
<?php word_unique_count ($string)?>

</body>
</html>

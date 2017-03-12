<?php

//Functions

function isRequestPost()  {return (bool) $_POST;}

function string_reverse($text,&$text_reversed )
{
    $g=-1;//для того что б в первом цикле for ключ массива был 0
    $text_to_array= explode('.',$text);
    $text2=[];

    for ($i=count($text_to_array)-1;$i>-1;$i--){
        $g=$g+1;
        $text2[$g]=$text_to_array[$i];
    }

    $text_reversed=implode(' .',$text2) ;

}

//Logic

$text='';
$text_reversed='';
if (isRequestPost()) {$text=$_POST['text'];}
if (isRequestPost()) {string_reverse($text,$text_reversed);}
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
<?=$text;?>

<h2>Отредактированный текст</h2>
<?=$text_reversed;?>

</body>
</html>

<?php

function isRequestPost()
{
    return (bool) $_POST;
}

    if (file_exists('comments.txt')){
        $f = fopen('comments.txt', 'r');

        $comments_array=[];
       // print_r(unserialize(file_get_contents('comments.txt')));
        $comments= file_get_contents('comments.txt');
        $comments= explode(PHP_EOL, $comments);

        foreach ($comments as $key => $comment) {
            if ($comment) {
                $comments[$key] = unserialize($comment);
                continue;
            }
            //unset($comment[$key]);
        }

        foreach ($comments as $key => $comment) {

            if (isset($comment['name']))echo $comment['name'].'<br>';
            if (isset($comment['text']))echo $comment['text'].'<br>' .'<br>';
        }


    }
//$comment=[];

if (isset($_POST['text']) && isset($_POST['name']) ) {
    $f = fopen('comments.txt', 'a+');

    $name=strip_tags($_POST['name']);//Удаляем из строки  все теги кроме '&lt;b&gt;.</p>*/'
    $text=strip_tags($_POST['text']);//Удаляем из строки  все теги кроме '&lt;b&gt;.</p>*/'

    $comment= compact('name','text');

    $comment = serialize($comment);


    if ($comment != '') {
        fwrite($f, $comment.PHP_EOL);
        header("Location: 8.php");
    }
}



   echo 'Оставьте свой комментарий';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> 8</title>
</head>
<body>
<form action="" method="post">
    Имя<input name="name" type="text">
    <br>
    <br>
    Текст<textarea name="text" ></textarea>
    <br>
    <button>Отправить</button>
</form>
<br />
<br />
</body>
</html>
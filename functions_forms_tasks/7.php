<?php
function isRequestPost()
{
    return (bool) $_POST;
}

$separate_comments_by=' security-444-devide-by ';
//if (isRequestPost()){
    if (file_exists('comments.txt')){
        $f = fopen('comments.txt', 'r');
        $comments_array=[];
        $comments=file_get_contents('comments.txt');

        $comments_array=explode($separate_comments_by , $comments);

        foreach ($comments_array as $key => $value) {
            if ($value != '' && $value != ' ' ){
                $comment_number=$key+1;
                echo $comment_number .'й' . ' Комментарий' .  '<p>' . $value .'</p>';
            }

        }
    }
//}


if (isset($_POST['text'])) {
    $f = fopen('comments.txt', 'a+');
    $comment=$_POST['text'];
    if ($comment != ''){
        fwrite($f,$comment . $separate_comments_by);//Добавил текст в конце строки что б по нему разбить строки при создании массива
        header("Location: 7.php");
    }

}
else {
    echo 'Оставьте свой комментарий';
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> 7</title>
</head>
<body>
<form action="" method="post">
    <textarea name="text" ></textarea>
    <br>
    <button>Отправить</button>
</form>
<br />
<br />
</body>
</html>
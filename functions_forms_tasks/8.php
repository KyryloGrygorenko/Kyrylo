<?php
function isRequestPost()
{
    return (bool) $_POST;
}
$bad_words = array('badword1','badword2','badword3','badword4');// Массив нецензурных слов

$separate_comments_by=' security-444-devide-by '; //По этому тексту мы разобьем тескт из файла на массив
                                                 //Также можно сделать это с помощью сериализации.(serialize а потом unserialize)


    if (file_exists('comments.txt')){
        $f = fopen('comments.txt', 'r');
        $comments_array=[];
        $comments=file_get_contents('comments.txt');

        $comments_array=explode($separate_comments_by , $comments);

        foreach ($comments_array as $key => $value) {
            $comment_number=$key+1;
            if ($value != '' && $value != ' ' ){
                echo $comment_number .'й' . ' Комментарий' .  '<p>' . $value .'</p>';
            }

        }
    }



if (isset($_POST['text'])) {
    $f = fopen('comments.txt', 'a+');
    $comment=$_POST['text'];
    $comments_array= explode(' ',$comment);

    foreach ($comments_array as $key => $value){
        for ($i=0;$i<count($bad_words);$i++){
            if ($value == $bad_words[$i]){
            //unset($comments_array[$key]);  // Либо удаляем нецензурное выражение
            $comments_array[$key]= ' !_ПЛОХОЕ_СЛОВО_! ';// Либо заменяем его
            }
        }

    }
    $comment=implode(' ',$comments_array);

    if ($comment != ''){
        fwrite($f,$comment . $separate_comments_by);//Добавил текст в конце строки что б по нему разбить строки при создании массива
        header("Location: 8.php");
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
    <title> 8</title>
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
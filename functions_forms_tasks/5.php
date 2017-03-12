<?php

//Functions

function search_file($dir,$search_word)
{   $directory_content=[];
    $filelist = scandir($_POST[$dir]);
    foreach($filelist as $filename){
        //echo $filename.'<br>';
        $directory_content[]= $filename;
    }

    for ($n=0;$n<count($directory_content);$n++)
    {
        $mystring = $directory_content[$n];
        $findme   = $_POST[$search_word];
        $pos = strpos($mystring, $findme);
        if ($pos === false) {}
        else {echo $mystring . '<br>';}
    }
}


//Logic

//$dir='C:\xampp\htdocs\President'; //the directory route
$dir='directory';
$search_word='searchword';
$directory_content=[];




/*$arr='test.php, index.php, reetm.html , bay.ua, string, playtest';
echo strpbrk($arr,'t');*/ //эта функция ищет совпадение по символу


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
    Директория<input type="text" name="directory">
    Ключевое слово <input type="text" name="searchword">
    <button>Найти</button>
    <br>
    <br>

    <?php if ($_POST): ?>
        <p>Список найденых файлов и папок:</p>
    <?php endif ?>

    <?php if ($_POST){search_file($dir,$search_word);}
    else {echo 'Введите директорию и ключевое слово для поиска';}
    ?>

</form>
</body>
</html>

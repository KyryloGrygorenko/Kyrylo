<?php
// Function

function tableGenerator (&$file_route_arr)
{
    for ($n=0; $n<count($file_route_arr);)
    {
            echo '<tr>';

            echo '<td> <img src="' .$file_route_arr[$n] .' " width="300px" height="230px"> </td> ';
            $n++;

            if (count($file_route_arr)-$n !== 0){
                echo '<td> <img src="' .$file_route_arr[$n] .' " width="300px" height="230px"> </td> ';
                $n++;
            }

            if (count($file_route_arr)-$n !== 0) {
                echo '<td> <img src="' . $file_route_arr[$n] . ' " width="300px" height="230px"> </td> ';
                $n++;
            }
            echo  '</tr>';
    }
}


// Logic
$file_route_arr=[];
if (!empty($_FILES['document'])) {
    $doc = $_FILES['document'];

   //file_put_contents('debug.txt', print_r($doc, 1));

    if (!$doc['error']) {
        move_uploaded_file($doc['tmp_name'],'gallery/' .$doc['name']);
    }
}

foreach (scandir('gallery/') as $key => $value){
    if ($value !== '.' && $value !== '..')
    {
        $file_route_arr [] = 'gallery/' . $value;
    }

}
//echo '<pre>';
//var_dump($file_route_arr);
//echo '<pre>';


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
<form method="post" enctype="multipart/form-data">
    Загрузить фото<input type="file" name="document" >
    <button>Сохранить</button>


</form>

<table>
    <?php tableGenerator ($file_route_arr); ?>
</table>
</body>
</html>

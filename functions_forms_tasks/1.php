<?php

// Functions

function getCommonWords($a, $b)
{
    for ($i=0;$i<count($a);$i++){

        for ($j=0;$j<count($b);$j++) {
            if ($a[$i] == $b[$j]) {
                echo $a[$i]. ' ';
            }
        }
    }
}

// Logic

if (!$_POST) {
    $_POST=null;}

$text1='';
$text2='';
$arr1=array();
$arr2=array();

if ($_POST)
{
    $text1=$_POST['message1'];
    $text2=$_POST['message2'];
    $arr1= explode(' ',$text1);
    $arr2= explode(' ',$text2);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style type="text/css">
        b:empty {
            display: none;
        }
    </style>
</head>
<body>

<h1>Form</h1>

<form method="post">

    <textarea name="message1"></textarea><br>
    <textarea name="message2"></textarea><br>
    <button type="submit">Go</button>


    <h2>Text from first text area</h2>
    <p><?=$text1?></p>
    <h2>Text from second text area</h2>
    <p><?=$text2?></p>
    <h2>Words that are reapeted in the first and the second text area</h2>
    <?php
    if ($_POST) {
        getCommonWords($arr1, $arr2);}
    ?>

</form>


</body>
</html>
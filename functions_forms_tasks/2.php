<?php

// Functions
define('TOP_COUNT_WORDS', 3);

function requestPost($key, $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

function isRequestPost()
{
    return (bool) $_POST;
}

function debug($x)
{
    echo '<pre>';
    var_dump($x);
    echo '</pre>';
}

function getTopWords( $words)
{
    $arr= [];
    foreach ($words as $word)  {
        $arr[$word] = strlen($word);

    }
    arsort($arr);
    if (count($arr)> TOP_COUNT_WORDS) {
        $arr = array_keys(array_slice($arr, 0, TOP_COUNT_WORDS));
        foreach ($arr as $key => $value) {
            echo $value . ',';
        }
    }
    else {
        foreach ($arr as $key => $value){
            echo $key .',';
        }
    }
}

// Logic

if (isRequestPost()) {
    $words= requestPost ('words');

    if (!$words) {
        die('bad data');
    }
    $words = array_values(array_filter(explode(' ',$words)));



}

//$text1='';
//$arr=array();

//if (isset($_POST))
//{
//    $words=$_POST['words'];
//    $words= array_filter(explode(' ',$words));
//}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Top 3 longest words</title>
    <style type="text/css">
        * {
            background: ghostwhite;
        }
    </style>
</head>
<body>

<h1>Form</h1>

<form method="post">

    <textarea name="words"></textarea><br>
    <button type="submit">Go</button>

</form>
<h2>3 Longest words</h2>
<?php if (isRequestPost()) {getTopWords($words);} ?>
</body>
</html>
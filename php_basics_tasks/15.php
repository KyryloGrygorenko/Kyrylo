<?php
//print_r($_GET);
$x= $_GET["x"];
$operator= $_GET["operator"];
$y= $_GET["y"];


switch ($operator) {
    case '-':
        echo $x - $y;
        break;
    case '+':
        echo $x + $y;
        break;
    case '*':
        echo $x * $y;
        break;
    case '/':
        echo $x / $y;
        break;
    case '%':
        echo $x % $y;
        break;}
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
<form action="test.php" method="get">
    <label for="int1">Введите число x</label>
    <input id="int1" type="text" name="x" maxlength="12" id="login" >
    <p><label for="operator"> Выберите оператор</label></p>
    <select name="operator" multiple="multiple" size="3" id="operator">
        <option value="+" >+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
        <option value="%">%</option>
    </select>
    <br>
    <label for="int1">Введите число y</label>
    <input id="int1" type="text" name="y" maxlength="12" id="login" >
    <input type="submit" name="send" value="Подсчитать">

</form>
</body>
</html>

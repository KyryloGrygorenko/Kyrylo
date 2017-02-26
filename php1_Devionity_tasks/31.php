<?php
$_POST['username'];
$_POST['email'];
$_POST['text'];

echo $Post_str=serialize($_POST);
echo '<br>';

$arr = unserialize($Post_str);
print_r ($arr);

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

<form action="31.php" method="POST">
    <input type="text"name="username" placeholder="username"><br>
    <input type="email"name="email" placeholder="email"><br>
    <input type="text"name="text" placeholder="message">

    <input type="submit" name="submit" value="Отправить">
</form>

</body>
</html>

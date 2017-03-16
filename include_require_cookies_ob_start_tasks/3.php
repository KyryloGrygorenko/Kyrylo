<?php

$color= isset($_COOKIE['color'])? $_COOKIE['color'] : '';

if( isset($_POST['color'][0]) ){$color=$_POST['color'][0] ;}
setcookie('color', $color, time()+2000,'/');

if ($color != '' || $color == ''){
    $selected_red='';
    $selected_green='';
    $selected_yellow='';
    $selected_orange='';
    $selected_blue='';
}


switch ($color) {
    case 'Red':
        $selected_red='selected';
        break;
    case 'Green':
        $selected_green='selected';
        break;
    case 'Yellow':
        $selected_yellow='selected';
        break;
    case 'Orange':
        $selected_orange='selected';
        break;
    case 'Blue':
        $selected_blue='selected';
        break;
}

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег SELECT</title>
</head>
<body>

<form  method="post">
    <p><select size="7" multiple name="color[]">
            <option disabled>Выберите цвет</option>
            <option  <?=$selected_red?> value="Red">Red</option>
            <option  <?=$selected_green?> value="Green">Green</option>
            <option  <?=$selected_yellow?> value="Yellow">Yellow</option>
            <option  <?=$selected_orange?> value="Orange">Orange</option>
            <option  <?=$selected_blue?> value="Blue">Blue</option>
        </select></p>
    <p><input type="submit" value="Отправить"></p>
</form>
<p style="color:<?=$color;?>"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto asperiores aut culpa deserunt dicta dolore dolorum ea earum eos esse, excepturi exercitationem fugiat fugit illo laborum minima molestiae neque nihil officia omnis optio perferendis possimus quisquam quo sequi similique soluta sunt suscipit tempora unde velit vero voluptatibus. Maiores, nisi officia quas similique ullam vel vitae. Assumenda aut consectetur cupiditate deserunt facere, fuga ipsum iure iusto laboriosam laudantium modi nesciunt nihil nulla quasi quisquam quo repellat sapiente tenetur velit voluptates? A alias aliquid aut beatae blanditiis delectus deserunt dicta distinctio dolorem doloremque dolores enim facere hic in maiores minima minus, molestiae non nostrum quidem quo quod ratione reiciendis repudiandae sint sunt veritatis vitae. Consequuntur, praesentium quidem! Aut consequuntur doloribus laboriosam! </p>

</body>
</html>
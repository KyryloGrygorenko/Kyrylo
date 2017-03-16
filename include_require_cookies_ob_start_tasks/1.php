<?php
error_reporting(E_ALL);
define ('DATA_FILE', 'messages.txt');
session_start();

//  functions functions functions functions functions functions functions functions functions functions

function saveMessage (array $message)
{
    $s=serialize($message);
    file_put_contents(DATA_FILE, $s . PHP_EOL, FILE_APPEND);
}
function loadMessages()
{
    if(file_exists(DATA_FILE))
    {
        $messages=file_get_contents(DATA_FILE);
        $messages= explode(PHP_EOL, $messages);

        foreach ($messages as $key => $message) {
            if($message) {
                $messages[$key] = unserialize($message);
                continue;
            }
            unset($messages[$key]);
        }
        return $messages;
    }

}

function cookieSet($key,$value,$expire=99999999)
{
    setcookie($key, $value, time()+$expire);
}

function cookieGet($key)
{
    if (isset($_COOKIE[$key])) {
        return $_COOKIE[$key];
    }
    return null;
}

function cookieExists($key)
{
    return isset($_COOKIE[$key]);
}

function cookieDelete ($key)
{
    cookieSet($key, '', -1 );
    if (cookieExists($key)){
        unset($_COOKIE[$key]);
    }
}

function createMessage($username, $email, $message)
{
    return compact('username', 'email', 'message');
}

function redirect($to)
{
    header("Location: {$to}");
    exit;
}

function requestPost($key, $default = null)
{
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

function requestGet($key, $default = null)
{
    return isset($_GET[$key]) ? $_GET[$key] : $default;
}

function isRequestPost()
{
    return (bool) $_POST;
}

function isFormValid()
{
    return trim(requestPost('username')) != '' && trim(requestPost('email')) != '' && trim(requestPost('message')) != '';
}



// logic logic logic logic logic logic logic logic logic logic logic logic logic logic logic logic

$count_form_sent= cookieExists('contact_form_sent')? $_COOKIE['contact_form_sent'] : 0;
if (isRequestPost()) {
    if (isFormValid()){$count_form_sent++;}
}
cookieSet('contact_form_sent',$count_form_sent, 60 );

if ($count_form_sent <=3 && $count_form_sent != 0) {
    echo 'Вы отправили ' .$count_form_sent . ' сообщений';
}
if ($count_form_sent==0) {
    echo 'Заполните все поля формы';
}


$flashMessage = requestGet('flash');
if (isRequestPost()) {
    if (isFormValid()) {
        $flashMessage = 'Спасибо! Ваша форма отправлена';
        $message = createMessage(requestPost('username'), requestPost('email'), requestPost('message'));

        if ($count_form_sent<=3)
        {saveMessage($message);
            redirect("1.php?flash={$flashMessage}");
        }
        else {
            $flashMessage='Вы не можете отправлять более 3 сообщений в минуту';
            redirect("1.php?flash={$flashMessage}");
        }

    }
}

$messages = loadMessages();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>

</head>
<body>


<b><?=$flashMessage ?></b>


</table>
<br>
<h1>Форма обратной связи</h1>
<form method="post">
    <input type="name" name="username" placeholder="ФИО" value="<?=requestPost('username')?>"><br>
    <input type="email" name="email" placeholder="Ваш email" value="<?=requestPost('email') ?> " ><br>
    <textarea name="message" placeholder="Ваше сообщение"><?=requestPost('message') ?></textarea><br>
    <button>GO</button>
</form>

<?php
if(isset($messages))
{
    foreach ($messages as $key => $message) : ?>
        <i><?=$message['username']?></i><br>
        <?=$message['message']?>
        <!--<a href="index.php?action=delete&amp;id=<?/*=$key*/?>">Delete</a>-->
        <hr>
    <?php endforeach; }?>





</body>
</html>
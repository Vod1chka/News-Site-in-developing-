<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Регистрация</title>
    </head>
    <body>
<?php
require_once '../database/db.php';

//очистка данных
$email     = trim(htmlspecialchars(stripslashes($_POST['email'])));
$username  = trim(htmlspecialchars(stripslashes($_POST['username'])));
$password  = trim(htmlspecialchars(stripslashes($_POST['password'])));

//проверяем на существование пользователя
$results = $mysql->query("SELECT * FROM `myguests` WHERE `username` = '$username' OR `email` = '$email'");
$myrow   = $results->fetch(PDO::FETCH_ASSOC);
if (!empty($myrow['id'])) {
    if ($myrow['username'] === $username) {
        $fmsg  = "Извините, введёный вами логин уже зарегистрирован, введите другой логин.";
        require_once "../register.php";
    } else {
        $fsmsg = "Извините, введённая вами электронная почта уже зарегистрирована.";
        require_once "../register.php";
    }
    exit();
}
if (($fmsg and $fsmsg) == 0) {

//сохраняем нового пользователя
$salt     = "54uy217sgh";
$password = md5($password.$salt);
$sql      = 'INSERT INTO MyGuests (email,username,password) VALUES (:email,:username,:password)';
$query    = $mysql->prepare($sql);
$query    -> execute(['email' => $email,'username' => $username,'password' => $password]);

$smsg = "Регистрация прошла успешно";
require_once "../register.php";
}
?>
    </body>
</html>
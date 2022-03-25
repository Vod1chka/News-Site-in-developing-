<?php
require_once '../database/db.php';

$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$salt 	  = "54uy217sgh";
$password = md5($password.$salt);
    
$results = $mysql->query("SELECT * FROM `myguests` WHERE `username` = '$username' AND `password` = '$password'");
$user 	 = $results->fetch(PDO::FETCH_ASSOC);

if(($user) == 0) {
    //echo "Неверный логин или пароль";
    $fmsg  = "Неверное имя пользователя или пароль";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    //echo ("Вы успешно авторизовались");
    setcookie('user', 'Да', time()+3600, '/');
    header('Location:/');
}
?>

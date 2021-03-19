<?php

require './connection.php';

$fio = mysqli_real_escape_string($link, $_POST['user-fio']);
$login = mysqli_real_escape_string($link, $_POST['user-login']);
$pass = mysqli_real_escape_string($link, $_POST['user-password']);
$email = mysqli_real_escape_string($link, $_POST['user-email']);

$fio = trim(explode(';', $fio)[0]);
$login = trim(explode(';', $login)[0]);
$pass = trim(explode(';', $pass)[0]);
$email = trim(explode(';', $email)[0]);

if ($fio !== '' && $login !== '' && $pass !== '')
{
    $result = mysqli_query($link, "INSERT INTO `users` (id, fio, login, email, password, role) VALUES(NULL, '$fio', '$login', '$email', '$pass', 0)");
    if ($result)
    {
        header('Location: /pages/auth.php');
    }
    else
    {
        echo mysqli_error($link);
        setcookie('errors', serialize(['message' => 'Не удалось зарегистрировать нового пользователя']), time()+86000,
            '/');
    }
}
?>
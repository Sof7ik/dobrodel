<?php

require './connection.php';

$login = $_POST['user-login'];
$password = $_POST['user-password'];

if ($result = mysqli_query($link, "SELECT `id`, `fio`, `password`, `role` FROM `users` WHERE `login` = '$login'"))
{
    $existUser = mysqli_fetch_assoc($result);
}
else
{
    echo mysqli_error($link);
    // setcookie('errors', serialize(['message' => 'Неправильный логин']));
}


if (!empty($existUser))
{
    if ($password === $existUser['password']) {
        setcookie(
            'user', 
            serialize(
                [
                    'id' => $existUser['id'],
                    'fio' => $existUser['fio'],
                    'role' => $existUser['role']
                ]),
            time()+86400,
            '/'
        );

        header('Location: /pages/lk.php');
    }
    else
    {
        echo 'Пароль не тот';
        // setcookie('errors', serialize(['message' => 'Неправильный пароль']));
    }
}
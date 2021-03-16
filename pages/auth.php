<?php
    if (!empty($_COOKIE['user']))
    {
        header('Location: /');
    }
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация - Сделаем лучше вместе</title>

    <link rel="stylesheet" href="/assets/styles/base.css">
    <link rel="stylesheet" href="/components/header.css">
    <link rel="stylesheet" href="/components/footer.css">

    <link rel="stylesheet" href="/assets/styles/reg-auth.css">
</head>
<body>

<? include dirname(__DIR__) . '/components/header.php'; ?>

<div class="container-1440">
    <h1 class="auth-title">Авторизация</h1>

    <form action="/api/authenticate.php" method="POST">
        <input
                class="text-input"
                type="text"
                name="user-login"
                id="login"
                placeholder="Введите логин"
                required>
        <input
                class="text-input"
                type="password"
                name="user-password"
                id="password"
                placeholder="Введите пароль"
                required>

        <input type="submit" value="Войти" class="btn">
    </form>

    <p class="already-exists">Еще не зарегистрированы? <a href="/pages/reg.php">Зарегиструйтесь</a></p>
</div>

<? include dirname(__DIR__) . '/components/footer.php'; ?>
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
    <title>Регистрация - Сделаем лучше вместе</title>

    <link rel="stylesheet" href="/assets/styles/base.css">
    <link rel="stylesheet" href="/components/header.css">
    <link rel="stylesheet" href="/components/footer.css">

    <link rel="stylesheet" href="/assets/styles/reg-auth.css">
</head>
<body>

<? include dirname(__DIR__) . '/components/header.php'; ?>

<div class="container-1440">

    <h1 class="auth-title">Регистрация</h1>

    <form action="/api/register.php" method="POST">
        <input
                class="text-input"
                type="text"
                name="user-fio"
                id="login"
                placeholder="Введите ФИО"
                pattern="^[А-Яа-яЁё\s]+${3}"
                required>

        <input
                class="text-input"
                type="text"
                name="user-login"
                id="login"
                placeholder="Введите логин"
                pattern="^[A-Za-z]+$"
                required>
        <input
                class="text-input"
                type="email"
                name="user-email"
                id="login"
                placeholder="Введите email"
                required>

        <input
            class="text-input"
            type="password"
            name="user-password"
            id="password"
            placeholder="Введите пароль"
            required>

        <input
            class="text-input"
            type="password"
            name="user-password-repeat"
            id="password-repeat"
            placeholder="Повторно введите пароль"
            required>


        <div class="argeement">
            <input type="checkbox" name="agreement" id="user-agrees" required>
            <label for="user-agrees">Согласен. С чем согласен? Со всем согласен</label>
        </div>

        <input type="submit" value="Зарегистрироваться" class="btn">
    </form>

    <p class="already-exists">Уже зарегистрированы? <a href="/pages/auth.php">Войдите</a></p>

</div>

<? include dirname(__DIR__) . '/components/footer.php'; ?>

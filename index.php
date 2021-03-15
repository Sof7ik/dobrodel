<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная - Сделаем лучше вместе</title>

    <link rel="stylesheet" href="/assets/styles/base.css">
    <link rel="stylesheet" href="/components/header.css">
    <link rel="stylesheet" href="/components/footer.css">

    <link rel="stylesheet" href="assets/styles/mainpage.css">
</head>
<body>

<? include __DIR__ . '/components/header.php'; ?>

<section class="reg-section">
    <div class="container-1440">
        <div class="buttons">
            <a href="/pages/auth.php" class="reg-button">регистрация</a>
            <a href="/pages/reg.php" class="reg-button green-btn">войти</a>
        </div>
    </div>
</section>

<article class="about-us">
    <div class="container-1440">
        <h2 class="section-title">О нас</h2>

        <p class="section-desc">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        </p>

        <div class="advantages-list">
            <div class="advantage">
                <img src="/media/icons/icon1.png" alt="advantage-img" class="advantage-img">
                <p class="advantage-name">Первый плюс</p>
                <p class="advantage-desc">Описание первого плюса</p>
            </div>

            <div class="advantage">
                <img src="/media/icons/icon2.png" alt="advantage-img" class="advantage-img">
                <p class="advantage-name">Первый плюс</p>
                <p class="advantage-desc">Описание первого плюса</p>
            </div>

            <div class="advantage">
                <img src="/media/icons/icon3.png" alt="advantage-img" class="advantage-img">
                <p class="advantage-name">Первый плюс</p>
                <p class="advantage-desc">Описание первого плюса</p>
            </div>
        </div>
    </div>
</article>

<article class="message-us">
    <div class="container-1440">
        <h2 class="section-title">Сообщите нам</h2>

        <p class="section-desc">Как нам сообщить о проблеме? Прочитайте инструкцию нижу и Вы всё поймёте!)</p>

        <div class="how-to-message-us">
            <div class="how-to-mess-item">
                <p class="item-text">
                    <a href="/pages/auth.php">Войдите</a> или <a href="/pages/reg.php">зарегистрируйтесь</a>, чтобы
                    создать заявку.
                </p>
            </div>

            <div class="how-to-mess-item">
                <p class="item-text">
                    <a href="/pages/lk.php">Создайте заявку</a> в личном кабинете.
                </p>
            </div>

            <div class="how-to-mess-item">
                <p class="item-text">
                    Мы в свою очередь рассмотрим заявку как можно скорее!)
                </p>
            </div>
        </div>
    </div>
</article>


<? include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
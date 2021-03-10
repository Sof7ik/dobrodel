<?php
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>

    <link rel="stylesheet" href="/assets/styles/base.css">
    <link rel="stylesheet" href="/components/header.css">
    <link rel="stylesheet" href="/components/footer.css">

    <link rel="stylesheet" href="/assets/styles/lk.css">
</head>
<body>

    <? include dirname(__DIR__) . '/components/header.php';?>

    <main>
        <div class="bar">
            <p class="user-role">Администратор</p>

            <nav class="bar__navigation">
                <a href="/pages/requests.php" class="bar-navigation__item">Заявки</a>
                <a href="/pages/requests.php" class="bar-navigation__item">Категории</a>
            </nav>

            <a href="/logout.php" class="logout">ВЫХОД</a>
        </div>

        <div class="requests-list">
            <div class="request-item green">
<!--                <img src="" alt="request-photo">-->
                <div class="request-photo"></div>

                <div class="request-texts">
                    <h2 class="request-name">Название заявки</h2>

                    <div class="date-category">
                        <span class="date">02.02.2020</span>
                        <span class="category">02.02.2020</span>
                    </div>

                    <p class="request-desc">
                        ipsum Lorem ipsum Lorem ipsum Lorem ipsum vLorem ipsu Lorem ipsum
                        vv Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum Lorem ipsum Lorem ipsum vLorem
                        ipsum Lorem ipsum
                    </p>
                </div>

                <button class="change-status change-to-decline">
                    сменить статус на <span>отклонена</span>
                </button>

                <form class="change-to-done">
                    <input type="file" name="done-photo" id="add-image" required>
                    <label for="add-image" class="image-label">обзор</label>

                    <input type="submit" value="решена" id="makeDone" class="makeDone-button" disabled>
                    <label for="makeDone" class="change-status disabled">
                        сменить статус на <span>решена</span>
                    </label>
                </form>
            </div>
        </div>
        
    </main>
</body>
</html>

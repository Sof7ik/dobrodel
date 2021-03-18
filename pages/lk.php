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

    <?
        include dirname(__DIR__) . '/components/header.php';

        $userRole = unserialize($_COOKIE['user'])['role'];
        $userName = unserialize($_COOKIE['user'])['fio'];
    ?>

    <div class="bar">
        <div class="bar-container">
            <p class="user-role"> 
                <?
                    $userName = explode(' ', $userName);
                    echo $userName[0].' '.$userName[1]
                ?>
            </p>

            <nav class="bar__navigation">
                <?
                if ($userRole == 1)
                {?>
                    <a href="/pages/requests.php" class="bar-navigation__item">Заявки</a>
                    <a href="/pages/requests.php" class="bar-navigation__item">Категории</a>
                <?}
                ?>

            </nav>

            <a href="/logout.php" class="logout">ВЫХОД</a>
        </div>
    </div>

    <div class="container-1440">
        <?
            if ($userRole == 1)
            {
                require './admin/lk/index.php';
            }
            else if ($userRole == 0)
            {
                require './user/lk/index.php';
            }
        ?>
    </div>

    <? require dirname(__DIR__).'/components/footer.php'; ?>
</body>
</html>

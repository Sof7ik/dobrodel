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

    <link rel="stylesheet" href="/assets/styles/mainpage.css">
</head>
<body>

<? 
    require_once($_SERVER['DOCUMENT_ROOT'].'/api/connection.php');
    $counter = mysqli_num_rows(mysqli_query($link, "SELECT id from `requests` WHERE `status` = 2"));
    $lastDones = mysqli_fetch_all(mysqli_query($link, 
        "SELECT 
        `name`, `create-date`, `category-name`, `description`, `photo-before`, `photo-after`
        FROM `requests`, `request-categories`
        WHERE 
        `requests`.`status` = 2 AND
        `requests`.`category` = `request-categories`.`id` LIMIT 4"
    ), MYSQLI_ASSOC);
    include __DIR__ . '/components/header.php'; 
?>

<section class="reg-section">
    <div class="container-1440">
        <div class="buttons">
            <?
                if (!empty($_COOKIE['user']))
                {?>
                    <a href="/pages/lk.php" class="reg-button">Личный кабинет</a>
                    <a href="/logout.php" class="reg-button">Выйти</a>
                <?}
                else
                {?>
                    <a href="/pages/reg.php" class="reg-button">регистрация</a>
                    <a href="/pages/auth.php" class="reg-button green-btn">войти</a>
                <?}
            ?>
        </div>
    </div>
</section>

<?
if (empty($_COOKIE['user']))
{?>
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
<?}?>

<article class="message-us">
    <div class="container-1440">
        <h2 class="section-title">Сообщите нам</h2>

        <p class="section-desc">Как нам сообщить о проблеме? Прочитайте инструкцию ниже и Вы всё поймёте!)</p>

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

<article class="last-dones">
    <div class="container-1440">
        <h2 class="section-title">Последние добрые дела</h2>

        <p class="section-desc">Мы сделали уже <span class="counter"><?=$counter?></span> добрых дел</p>

        <p class="section-desc">
            Мы ежедневно выполняем от 10 до 25 добрых дел в различных видах деятельности - уборка
            дорог, мусора, покарска стен и бордюров, ремонт фонарных столбов и много-много других. Познакомьтесь с нашими
            последними добрыми делами
        </p>

        <div class="last-dones-list">
            <?
                foreach($lastDones as $key => $lastDoneItem)
                {
                    $dateTime = new DateTime($lastDoneItem['create-date']);
                    $date = $dateTime->format('d.m.Y');
                ?>
                    <div class="last-done" <?=($key+1) % 2 == 0 ? 'reverced' : ''?>>
                        <div class="last-done-image" style="background-image: url('<?=$lastDoneItem['photo-after']?>');">
                            <img
                                    src="<?=$lastDoneItem['photo-before']?>"
                                    alt=""
                                    class="last-done-before"
                            >
                        </div>

                        <div class="texts">
                            <h3 class="last-done-name"><?=$lastDoneItem['name']?></h3>

                            <div class="date-category">
                                <span class="date-category"><?=$date?></span>
                                <span class="date-category"><?=$lastDoneItem['category-name']?></span>
                            </div>

                            <p class="last-done-desc">
                                <?=$lastDoneItem['description']?>
                            </p>
                        </div>
                    </div>
                <?}?>
        </div>
    </div>
</article>

<? include __DIR__ . '/components/footer.php'; ?>
</body>
</html>
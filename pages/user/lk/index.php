<?
    require($_SERVER['DOCUMENT_ROOT'].'\api\connection.php');
    
    $userId = unserialize($_COOKIE['user'])['id'];

    $requests = mysqli_fetch_all(
        mysqli_query($link, 
            "SELECT 
            `requests`.`id` AS 'requestID',
            `requests`.`name` as 'name',
            `requests`.`description` as 'desc',
            `requests`.`create-date` as 'date',
            `request-statuses`.`status-name` as 'status',
            `request-categories`.`category-name` as 'category'
            FROM `requests`, `request-statuses`, `request-categories`, `users`
            WHERE 
            `requests`.`user` = `users`.`id` AND
            `requests`.`user` = $userId AND
            `requests`.`status` = `request-statuses`.`id` AND 
            `requests`.`category` = `request-categories`.`id`"
        ),  MYSQLI_ASSOC
    );

    $allStatuses = mysqli_fetch_all(mysqli_query($link, "SELECT * from `request-statuses`"));
    $allCategories = mysqli_fetch_all(mysqli_query($link, "SELECT * from `request-categories`"));
?>

<script defer src="/assets/js/open-create-req.js"></script>

<article class="my-requests">
    <div class="section-title">
        <h1 class="article-title">Мои заявки</h1>

        <div class="request-filter">
            <label for="select-status">Показать только</label>
            <select name="select-status" id="select-status" class="list-select">
                <?
                    foreach ($allStatuses as $status)
                    {
                        ?><option value="<?=$status[0]?>"><?=$status[1]?></option><?
                    }
                ?>
            </select>
        </div>

        <button id="create-request">Создать заявку</button>
    </div>

    <div class="create-request-wrapper" id='create-wrapper'>
        <h2 class="article-subtitle">Создать заявку</h2>

        <form action="/api/create-request.php" method="POST" enctype="multipart/form-data">
            <div class='fields'>
                <!-- <div class="form__left"> -->
                    <div class="input-wrapper">
                        <label for="request-name" class="text-label">Название</label>
                        <input type="text" name="request-name" id="request-name" placeholder="Введите название заявки">
                    </div>

                    <div class="input-wrapper">
                        <label for="request-desc" class="text-label">Описание</label>
                        <textarea name="request-desc" id="request-desc" placeholder="Введите описание заявки"></textarea>
                    </div>

                    <div class="input-wrapper">
                        <label for="request-category" class="text-label">Категория</label>

                        <select name="request-category" id="request-category" class="list-select">
                            <?
                                foreach ($allCategories as $category)
                                {
                                    ?><option value="<?=$category[0]?>"><?=$category[1]?></option><?
                                }
                            ?>
                        </select>
                    </div>
                <!-- </div> -->

                <!-- <div class="form__right"> -->
                    <div class="input-wrapper">
                        <label for="request-image" class="text-label">Изображение</label>
                        <label for="request-image" class="request-image-select-btn">Обзор</label>
                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                        <input type="file" name="request-image" id="request-image" accept="image/*">
                    </div>
                <!-- </div> -->
            </div>

            <input type="submit" value="Создать заявку">
        </form>
    </div>

    <div class="requests-list">
        <?
            // var_dump($requests);

            foreach ($requests as $request)
            {
                $dateTime = new DateTime($request['date']);
                $date = $dateTime->format('d.m.Y');
                ?>
                <div class="request-item">
                    <div class="up-request-item">
                        <span class="status"><?=$request['status'];?></span>

                        <span class="name"><?=$request['name'];?></span>

                        <p class="desc"><?=$request['desc'];?></p>
                    </div>

                    <div class="bottom-request">
                        <span class="category"><?=$request['category'];?></span>
                        <button class="delete-item" data-requestid='<?=$request['requestID']?>'>удалить</button>
                        <span class="date"><?=$date?></span>
                    </div>
                </div>
               
            <?}
            
        ?>
    </div>
</article>
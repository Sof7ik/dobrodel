<div class="requests-list">
    <div class="admin-request-item green">
        <!--                <img src="" alt="request-photo">-->
        <div class="admin-request-photo"></div>

        <div class="admin-request-texts">
            <h2 class="admin-request-name">Название заявки</h2>

            <div class="admin-date-category">
                <span class="date">02.02.2020</span>
                <span class="category">02.02.2020</span>
            </div>

            <p class="admin-request-desc">
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
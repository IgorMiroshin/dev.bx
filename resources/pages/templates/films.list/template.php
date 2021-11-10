<?php
/** @var array $moviesItem */
?>
<div class="film__item">
    <div class="film__item_img">
        <img src="resources/img/content/<?= $moviesItem["id"] ?>.jpg" alt="<?= $moviesItem["title"] ?>">
    </div>
    <div class="film__item_content">
        <div class="film__item_title">
            <?= $moviesItem["title"] ?> (2021)
        </div>
        <div class="film__item_subtitle">
            <?= $moviesItem["original-title"] ?>
        </div>
        <div class="film__item_description">
            <?= mb_strimwidth($moviesItem["description"], 0, 70, "..."); ?>
        </div>
        <div class="film__item_container">
            <div class="film__item_time">
                <i class="icon icon__time_grey"></i><?= $moviesItem["duration"] ?> мин.
                / <?= date('H:i', mktime(0, $moviesItem["duration"])); ?>
            </div>
            <div class="film__item_genre">
                <?= implode(",", $moviesItem["genres"]) ?>
            </div>
        </div>
    </div>
    <div class="film__item_showmore-block">
        <div class="film__item_showmore-button">
            <a href="detail.php?id=<?= $moviesItem["id"] ?>">Подробнее </a>
        </div>
    </div>
</div>
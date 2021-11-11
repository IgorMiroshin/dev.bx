<?php
/** @var array $moviesItem */
?>
<div class="film__item">
    <div class="film__item_img">
        <img src="<?= linkToImage($moviesItem["id"], 'resources/img/content/') ?>" alt="<?= $moviesItem["title"] ?>">
    </div>
    <div class="film__item_content">
        <div class="film__item_title">
            <?= $moviesItem["title"] ?> (<?= $moviesItem["release-date"] ?>)
        </div>
        <div class="film__item_subtitle">
            <?= $moviesItem["original-title"] ?>
        </div>
        <div class="film__item_description">
            <?= cropText($moviesItem["description"], 70); ?>
        </div>
        <div class="film__item_container">
            <div class="film__item_time">
                <i class="icon icon__time_grey"></i><?= $moviesItem["duration"] ?> мин.
                / <?= formattedDuration($moviesItem["duration"]) ?>
            </div>
            <div class="film__item_genre">
                <?= arrayToStr($moviesItem["genres"]) ?>
            </div>
        </div>
    </div>
    <div class="film__item_showmore-block">
        <div class="film__item_showmore-button">
            <a href="<?= linkToPage('id', $moviesItem["id"]) ?>">Подробнее</a>
        </div>
    </div>
</div>
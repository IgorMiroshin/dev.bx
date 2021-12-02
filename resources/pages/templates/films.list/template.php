<?php
/** @var array $moviesItem */
?>
<div class="film__item">
    <?
    $genres = [];
    $genresTMP = getMovieGenre($moviesItem["ID"]);
    foreach ($genresTMP as $item) {
        $genres[] = $item["NAME"];
    }
    ?>
    <div class="film__item_img">
        <img src="<?= formattingLinkToImage($moviesItem["ID"], 'resources/img/content/') ?>"
             alt="<?= $moviesItem["TITLE"] ?>">
    </div>
    <div class="film__item_content">
        <div class="film__item_title">
            <?= $moviesItem["TITLE"] ?> (<?= $moviesItem["RELEASE_DATE"] ?>)
        </div>
        <div class="film__item_subtitle">
            <?= $moviesItem["ORIGINAL_TITLE"] ?>
        </div>
        <div class="film__item_description">
            <?= cropText($moviesItem["DESCRIPTION"], 70); ?>
        </div>
        <div class="film__item_container">
            <div class="film__item_time">
                <i class="icon icon__time_grey"></i><?= $moviesItem["DURATION"] ?> мин.
                / <?= formattingDurationToTime($moviesItem["DURATION"]) ?>
            </div>
            <div class="film__item_genre">
                <?= arrayToStr($genres) ?>
            </div>
        </div>
    </div>
    <div class="film__item_showmore-block">
        <div class="film__item_showmore-button">
            <a href="<?= formattingLinkToPage('id', $moviesItem["ID"], 'detail.php') ?>">Подробнее</a>
        </div>
    </div>
</div>
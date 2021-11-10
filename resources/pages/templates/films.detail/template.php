<?php
/** @var array $moviesItem */
?>
<div class="film__page-detail_head">
    <div class="film__page-detail_title">
        <h1>
            <?= $moviesItem["title"] ?> (<?= $moviesItem["release-date"] ?>)
        </h1>
    </div>
    <div class="film__page-detail_subtitle">
        <?= $moviesItem["original-title"] ?> <span><?= $moviesItem["age-restriction"] ?>+</span>
    </div>
    <div class="film__page-detail_wishlist"><i class="icon icon__wishlist_grey"></i></div>
</div>
<div class="film__page-detail_content">
    <div class="film__page-detail_img">
        <img src="resources/img/content/<?= $moviesItem["id"] ?>.jpg" alt="<?= $moviesItem["title"] ?>">
    </div>
    <div class="film__page-detail_body">
        <div class="film__page-detail_rating">
            <div class="film__page-detail_rating-line">
                <?
                for ($i = 0; $i < round($moviesItem["rating"]); $i++) {
                    echo '<span class="active"></span>';
                }
                for ($i = round($moviesItem["rating"]); $i < 10; $i++) {
                    echo '<span></span>';
                }
                ?>
            </div>
            <div class="film__page-detail_rating-number"><?= $moviesItem["rating"] ?></div>
        </div>
        <div class="film__page-detail_about">
            <div class="film__page-detail_about-title">
                О фильме
            </div>
            <div class="film__page-detail_about-text">
                <table>
                    <tr>
                        <td>Год производства:</td>
                        <td><?= $moviesItem["release-date"] ?></td>
                    </tr>
                    <tr>
                        <td>Режиссер:</td>
                        <td><?= $moviesItem["director"] ?></td>
                    </tr>
                    <tr>
                        <td>В главных ролях:</td>
                        <td><?= implode(", ", $moviesItem["cast"]) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="film__page-detail_description">
            <div class="film__page-detail_description-title">Описание</div>
            <div class="film__page-detail_description-text">
                <?= $moviesItem["description"] ?>
            </div>
        </div>
    </div>
</div>


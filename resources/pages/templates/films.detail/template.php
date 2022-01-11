<?php
/** @var array $moviesItem */
?>
<div class="film__page-detail_head">
    <div class="film__page-detail_title">
        <h1>
            <?= $moviesItem["TITLE"] ?> (<?= $moviesItem["RELEASE_DATE"] ?>)
        </h1>
    </div>
    <div class="film__page-detail_subtitle">
        <?= $moviesItem["ORIGINAL_TITLE"] ?> <span><?= $moviesItem["AGE_RESTRICTION"] ?>+</span>
    </div>
    <div class="film__page-detail_wishlist"><i class="icon icon__wishlist_grey"></i></div>
</div>
<div class="film__page-detail_content">
    <div class="film__page-detail_img">
        <img src="<?= formattingLinkToImage($moviesItem["ID"], 'resources/img/content/') ?>"
             alt="<?= $moviesItem["TITLE"] ?>">
    </div>
    <div class="film__page-detail_body">
        <div class="film__page-detail_rating">
            <div class="film__page-detail_rating-line">
                <?
                formattingVisualRating($moviesItem["RATING"], 10);
                ?>
            </div>
            <div class="film__page-detail_rating-number"><?= $moviesItem["RATING"] ?></div>
        </div>
        <div class="film__page-detail_about">
            <div class="film__page-detail_about-title">
                О фильме
            </div>
            <div class="film__page-detail_about-text">
                <table>
                    <tr>
                        <td>Год производства:</td>
                        <td><?= $moviesItem["RELEASE_DATE"] ?></td>
                    </tr>
                    <tr>
                        <td>Режиссер:</td>
                        <td><?= $moviesItem["DIRECTOR"]["NAME"] ?></td>
                    </tr>
                    <tr>
                        <td>В главных ролях:</td>
                        <td><?= arrayToStr($moviesItem["ACTORS"]) ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="film__page-detail_description">
            <div class="film__page-detail_description-title">Описание</div>
            <div class="film__page-detail_description-text">
                <?= $moviesItem["DESCRIPTION"] ?>
            </div>
        </div>
    </div>
</div>


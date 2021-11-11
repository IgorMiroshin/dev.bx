<?php
/** @var string $content */
/** @var array $config */
/** @var array $currentPage */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $config["title"] ?></title>
    <link rel="stylesheet" href="./resources/css/reset.css">
    <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body>
<div>
    <aside id="page_menu" class="menu menu_left">
        <div class="menu__logo">
            <div class="menu__logo_img">
                <img src="/resources/img/logo__bitflix.png" alt="">
            </div>
        </div>
        <div class="menu__list-items">
            <?
            $menu = $config["menu"];
            foreach ($menu as $key => $menuItem) {
                ?>
                <?= renderTemplate("resources/pages/templates/menu.list/template.php", ['menuItem' => $menuItem, "key" => $key, "currentPage" => $currentPage]); ?>
            <? } ?>
        </div>
    </aside>
    <div id="page_content" class="content">
        <header id="page_header" class="header">
            <div class="header__container">
                <?
                require_once 'resources/includes/searchForm.php';
                require_once 'resources/includes/addFilm.php';
                ?>
            </div>
        </header>
        <div class="content__container">
            <?= $content ?>
        </div>
    </div>
</div>
</body>
</html>

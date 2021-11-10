<?php
/** @var string $content */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bitflix</title>
    <link rel="stylesheet" href="./resources/css/reset.css">
    <link rel="stylesheet" href="./resources/css/style.css">
</head>
<body>
<div>
    <aside id="page_menu" class="menu menu_left">
        <div class="menu__logo">
            <div class="menu__logo_img">
                <img src="./img/logo__bitflix.png" alt="">
            </div>
        </div>
        <?
        require_once 'templates/menu.list/template.php'
        ?>
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

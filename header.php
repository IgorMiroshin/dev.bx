<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
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
                require_once 'includes/searchForm.php';
                require_once 'includes/addFilm.php';
                ?>
            </div>
        </header>
        <div class="content__container">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        require_once 'components/menu.list/template.php'
        ?>
    </aside>
    <div id="page_content" class="content">
        <header id="page_header" class="header">
            <div class="header__container">
                <div class="header__search">
                    <form action="">
                        <div class="header__search_input">
                            <input type="text" placeholder="Поиск по каталогу...">
                        </div>
                        <div class="header__search_button">
                            <button type="submit">ИСКАТЬ</button>
                        </div>
                    </form>
                </div>
                <div class="header__button">
                    <div class="header__button_add">
                        <a href="">Добавить фильм</a>
                    </div>
                </div>
            </div>
        </header>
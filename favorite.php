<?php
require_once "data/film__data.php";
require_once "config/app.php";
/** @var array $movies */
/** @var array $config */
require_once "lib/global-functions.php";
require_once "lib/template-functions.php";

$currentPage = 'favorite';

$page = renderTemplate("resources/pages/films.list.php", [
    "movies" => findElement($movies, "favoriteItem", true)
]);

renderLayout($page, ["config" => $config, "currentPage" => $currentPage]);
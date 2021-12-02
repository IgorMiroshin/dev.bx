<?php
require_once "data/film__data.php";
require_once "config/app.php";
/** @var array $movies */
/** @var array $config */
require_once "lib/global-functions.php";
require_once "lib/template-functions.php";

$detailPage = $_GET["id"];
$currentPage = $_GET["page"];

$page = renderTemplate("resources/pages/films.detail.php", [
    "movies" => $movies, "id" => $detailPage
]);

renderLayout($page, ["config" => $config, "currentPage" => $currentPage]);
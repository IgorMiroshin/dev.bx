<?php
//require_once "data/film__data.php";
///** @var array $movies */
require_once "config/app.php";
/** @var array $config */
require_once "lib/global-functions.php";
require_once "lib/template-functions.php";
require_once "lib/connectToSQL-functions.php";
require_once "lib/moviesSQL-functions.php";

$connect = connectSQL($config["HOST"], $config["DB_NAME"], $config["DB_USER"], $config["DB_PASSWORD"]);
$setEnconding = setEncondingConnectDB();

if ($connect && $setEnconding) {
    $detailPage = $_GET["id"];
    $currentPage = $_GET["page"];
    $moviesItem = getMovie($detailPage);
    $genres = getGenres();

    $page = renderTemplate("resources/pages/films.detail.php", [
        "moviesItem" => $moviesItem
    ]);

    renderLayout($page, ["config" => $config, "currentPage" => $currentPage, "genres" => $genres]);
} else {
    var_dump($connect);
    var_dump($setEnconding);
}
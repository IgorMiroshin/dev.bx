<?php
//require_once "data/film__data.php";
///** @var array $movies */
declare(strict_types=1);
error_reporting(-1);
require_once "config/app.php";
/** @var array $config */
/** @var $database */
require_once "lib/global-functions.php";
require_once "lib/template-functions.php";
require_once "lib/connectToSQL-functions.php";
require_once "lib/moviesSQL-functions.php";

$connect = connectSQL($config["HOST"], $config["DB_NAME"], $config["DB_USER"], $config["DB_PASSWORD"], $database);
$setEnconding = setEncondingConnectDB($database);

if ($connect && $setEnconding) {
    $genres = getGenres();
    $currentPage = isset($_GET["page"]) ? $_GET["page"] : "";
    $detailPage = (int)$_GET["id"];
    $moviesItem = getMovie($detailPage);

    $actorsTMP = getMovieActors((int)$moviesItem["ID"]);
    foreach ($actorsTMP as $item) {
        $moviesItem["ACTORS"][] = $item["NAME"];
    }

    $moviesItem["DIRECTOR"] = getMovieDirector((int)$moviesItem["ID"]);

    $page = renderTemplate("resources/pages/films.detail.php", [
        "moviesItem" => $moviesItem
    ]);
    renderLayout($page, ["config" => $config, "currentPage" => $currentPage, "genres" => $genres]);
} else {
    var_dump($connect);
    var_dump($setEnconding);
}
<?php
//require_once "data/film__data.php";
require_once "config/app.php";
///** @var array $movies */
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
    $currentPage = 'favorite';
    $movies = getMovies();
    $page = renderTemplate("resources/pages/films.list.php", [
        "movies" => findElement($movies, "favoriteItem", true)
    ]);
    renderLayout($page, ["config" => $config, "currentPage" => $currentPage, "genres" => $genres]);
} else {
    var_dump($connect);
    var_dump($setEnconding);
}
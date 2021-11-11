<?
require_once "data/film__data.php";
require_once "config/app.php";
/** @var array $movies */
/** @var array $config */
require_once "lib/global-functions.php";
require_once "lib/template-functions.php";

$currentPage = $_GET["page"];
$detailPage = $_GET["id"];

if ((empty($currentPage) || $currentPage === "main") && empty($detailPage)) {
    $page = renderTemplate("resources/pages/films.list.php", [
        "movies" => $movies
    ]);
} elseif ($currentPage === "favorite") {
    $page = renderTemplate("resources/pages/films.list.php", [
        "movies" => findElement($movies, "favoriteItem", true)
    ]);
} elseif ($currentPage === "addMovie") {
    $page = "";
} elseif (!empty($detailPage)) {
    $page = renderTemplate("resources/pages/films.detail.php", [
        "movies" => $movies, "id" => $detailPage
    ]);
} else {
    $findElement = $config["menu"][$currentPage];
    $page = renderTemplate("resources/pages/films.list.php", [
        "movies" => findElement($movies, "genres", $findElement)
    ]);
}

renderLayout($page, ["config" => $config, "currentPage" => $currentPage]);
?>


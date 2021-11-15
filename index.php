<?
require_once "data/film__data.php";
require_once "config/app.php";
/** @var array $movies */
/** @var array $config */
require_once "lib/global-functions.php";
require_once "lib/template-functions.php";

$currentPage = $_GET["page"];

if (!empty($currentPage) && isset($_GET)) {
    $findElement = $config["menu"][$currentPage];
    $page = renderTemplate("resources/pages/films.list.php", [
        "movies" => findElement($movies, "genres", $findElement)
    ]);
} else {
    $page = renderTemplate("resources/pages/films.list.php", [
        "movies" => $movies
    ]);
}
renderLayout($page, ["config" => $config, "currentPage" => $currentPage]);
?>


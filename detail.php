<?
require_once "data/film__data.php";
/** @var array $movies */
require_once "lib/global-functions.php";
require_once "lib/template-functions.php";

$filmsPage = renderTemplate("resources/pages/films.detail.php", [
    'movies' => $movies
]);

renderLayout($filmsPage, []);
?>
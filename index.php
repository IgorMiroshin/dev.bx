<?
require_once "data/film__data.php";
/** @var array $movies */
require_once "lib/global-functions.php";
require_once "lib/template-functions.php";

$filmsListPage = renderTemplate("resources/pages/films.list.php", [
    'movies' => $movies
]);

renderLayout($filmsListPage, []);
?>
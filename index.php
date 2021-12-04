<?
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
    $genres = getGenres();
    $currentPage = $_GET["page"];
    $movies = !empty($currentPage) ? getMovies($currentPage) : getMovies();
    $page = renderTemplate("resources/pages/films.list.php", [
        "movies" => $movies
    ]);
    renderLayout($page, ["config" => $config, "currentPage" => $currentPage, "genres" => $genres]);
} else {
    var_dump($connect);
    var_dump($setEnconding);
}

?>


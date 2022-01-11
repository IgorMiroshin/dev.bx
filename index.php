<?
declare(strict_types=1);
error_reporting(-1);
//require_once "data/film__data.php";
///** @var array $movies */
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
    $genres = getGenres($database);
    $currentPage = isset($_GET["page"]) ? $_GET["page"] : "";

    $movies = isset($currentPage) ? getMovies($currentPage, $database) : "";

    foreach ($movies as $key => $moviesItem) {
        $id = (int)$moviesItem["ID"];
        $genresTMP = getMovieGenre($id, $database);
        foreach ($genresTMP as $item) {
            $movies[$key]["GENRES"][] = $item["NAME"];
        }
    }

    $page = renderTemplate("resources/pages/films.list.php", [
        "movies" => $movies
    ]);
    renderLayout($page, ["config" => $config, "currentPage" => $currentPage, "genres" => $genres]);
} else {
    var_dump($connect);
    var_dump($setEnconding);
}

?>


<?php
/** @var $database */
function getMovies($genre = '', $database): array
{
    $data = mysqli_real_escape_string($database, $genre);

    $query = !empty($genre) ? "SELECT * FROM movie WHERE movie.ID IN (SELECT movie_genre.MOVIE_ID FROM movie_genre INNER JOIN genre on movie_genre.GENRE_ID = genre.ID WHERE genre.CODE='{$data}')" : "SELECT * FROM movie";

    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMovie(int $id, $database): array
{
    $query = "SELECT * FROM movie WHERE ID = {$id}";

    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_assoc($result);
}

function getMovieGenre(int $id, $database): array
{
    $query = "SELECT genre.NAME FROM genre INNER JOIN movie_genre mg on genre.ID = mg.GENRE_ID WHERE mg.MOVIE_ID={$id}";
    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMovieActors(int $id, $database): array
{
    $query = "SELECT actor.NAME FROM actor INNER JOIN movie_actor ma on actor.ID = ma.ACTOR_ID WHERE ma.MOVIE_ID={$id}";
    $result = mysqli_query($database, $query);

    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMovieDirector(int $id, $database): array
{
    $query = "SELECT director.NAME FROM director INNER JOIN movie m on m.DIRECTOR_ID = director.ID WHERE m.ID={$id}";
    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_assoc($result);
}

function getGenres($database): array
{
    $query = "SELECT * FROM genre";
    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_all($result, MYSQLI_ASSOC);

}
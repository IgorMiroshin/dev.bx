<?php
/** @var $database */
function getMovies()
{
    global $database;

    $query = "SELECT * FROM movie";

    $result = mysqli_query($database, $query);

    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMovie(int $id)
{
    global $database;
    $query = "SELECT * FROM movie WHERE ID = {$id}";

    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_assoc($result);
}

function getMovieGenre(int $id)
{
    global $database;

    $query = "SELECT genre.NAME FROM genre INNER JOIN movie_genre mg on genre.ID = mg.GENRE_ID WHERE mg.MOVIE_ID={$id}";
    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMovieActors(int $id)
{
    global $database;
    $query = "SELECT actor.NAME FROM actor INNER JOIN movie_actor ma on actor.ID = ma.ACTOR_ID WHERE ma.MOVIE_ID={$id}";
    $result = mysqli_query($database, $query);

    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }

    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMovieDirector(int $id)
{
    global $database;

    $query = "SELECT director.NAME FROM director INNER JOIN movie m on m.DIRECTOR_ID = director.ID WHERE m.ID={$id}";
    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_assoc($result);
}

function getGenres()
{
    global $database;

    $query = "SELECT * FROM genre";

    $result = mysqli_query($database, $query);

    $result = mysqli_query($database, $query);
    if (!$result) {
        trigger_error($database->error, E_USER_ERROR);
    }
    return mysqli_fetch_all($result, MYSQLI_ASSOC);

}
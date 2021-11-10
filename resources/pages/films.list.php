<?php
/** @var array $movies */
?>

<div class="film">
    <div class="film__list-items">
        <?
        foreach ($movies as $moviesItem) {
            echo renderTemplate("resources/pages/templates/films.list/template.php", ['moviesItem' => $moviesItem]) ;
        }
        ?>
    </div>
</div>

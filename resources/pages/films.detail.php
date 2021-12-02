<?php
/** @var array $movies */
/** @var array $id */
?>
<?php
$moviesItem = findElement($movies, 'id', (int)$id);
$moviesItem = $moviesItem[0];
?>
<div class="film__page-detail">
    <?= renderTemplate("resources/pages/templates/films.detail/template.php", ['moviesItem' => $moviesItem]); ?>
</div>
<?php
/** @var array $movies */
?>
<?php
$id = $_GET['id'];
$moviesItem = findElement($movies, 'id', (int)$id);
?>
<div class="film__page-detail">
    <?= renderTemplate("resources/pages/templates/films.detail/template.php", ['moviesItem' => $moviesItem]); ?>
</div>
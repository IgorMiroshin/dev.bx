<?php
/** @var string $menuItem */
/** @var string $key */
/** @var string $currentPage */
?>
<?php
$key = $menuItem["CODE"];
if ($menuItem["NAME"] === 'Главная') {
    $link = '/';
} elseif ($key === 'favorite') {
    $link = '/favorite.php';
} elseif ($key === 'addMovie') {
    $link = '/addMovie.php';
} else {
    $link = formattingLinkToPage('page', $key);
}
?>
<div class="menu__item <?= (empty($currentPage) && $menuItem["NAME"] === 'Главная') || $currentPage === $key ? 'active' : '' ?>">
    <a href="<?= $link ?>"><?= $menuItem["NAME"] ?></a>
</div>


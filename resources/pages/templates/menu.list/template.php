<?php
/** @var string $menuItem */
/** @var string $key */
/** @var string $currentPage */
?>
<?php
if ($menuItem === 'Главная') {
    $link = '/';
} elseif ($key === 'favorite') {
    $link = '/favorite.php';
} elseif ($key === 'addMovie') {
    $link = '/addMovie.php';
} else {
    $link = formattingLinkToPage('page', $key);
}
?>
<div class="menu__item <?= (empty($currentPage) && $menuItem === 'Главная') || $currentPage === $key ? 'active' : '' ?>">
    <a href="<?= $link ?>"><?= $menuItem ?></a>
</div>


<?php
/** @var string $menuItem */
/** @var string $key */
/** @var string $currentPage */
?>
<?php
$link = $menuItem === 'Главная' ? '/' : linkToPage('page', $key);
?>
<div class="menu__item <?= (empty($currentPage) && $menuItem === 'Главная') || $currentPage === $key ? 'active' : '' ?>">
    <a href="<?= $link ?>"><?= $menuItem ?></a>
</div>


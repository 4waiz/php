<?php
/** @var array $NAV_ITEMS */
/** @var string $CURRENT_PAGE */
?>
<header class="site-header">
    <div class="container">
        <nav class="navbar">
            <a href="index.php" class="navbar__logo" aria-label="BRIDGE Home">
                <img src="assets/images/logo_bridge_.svg" alt="BRIDGE">
            </a>
            <ul class="navbar__menu">
                <?php foreach ($NAV_ITEMS as $item):
                    $isActive = ($item['href'] === $CURRENT_PAGE);
                    $itemClass = 'navbar__item' . ($isActive ? ' navbar__item--active' : ' ');
                    $linkClass = 'navbar__link' . ($isActive ? ' navbar__link--active' : ' ');
                    $aria = $isActive ? ' aria-current="page"' : '';
                ?>
                    <li class="<?= $itemClass ?>">
                        <a href="<?= htmlspecialchars($item['href']) ?>" class="<?= $linkClass ?>"<?= $aria ?>>
                            <?= htmlspecialchars($item['label']) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="navbar__right">
                <button class="navbar__hamburger" aria-label="Toggle menu" aria-expanded="false">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </nav>
    </div>
</header>
